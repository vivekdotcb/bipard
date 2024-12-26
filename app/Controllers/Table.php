<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Curd;
use Config\Database;

class Table extends BaseController
{
    public function __construct()
    {
        $this->curd = new Curd();
    }

    public function columnUpdate()
    {
        if (isset($_SESSION['user']) && $_SESSION['role'] == 10) {

            $tableName = $this->request->getPost('table_name');
            $column = $this->request->getPost('name');

            $type = 'VARCHAR';
            if ($this->request->getPost('type') == 'select' || $this->request->getPost('type') == 'number') {
                $type = 'INT';
            } else if ($this->request->getPost('type') == 'texteditor') {
                $type = 'LONGTEXT';
            } else if ($this->request->getPost('type') == 'multiple_image') {
                $type = 'LONGTEXT';
            }

            $max = $this->request->getPost('max');

            $forge = Database::forge();
            $db = Database::connect();

            if (!$db->tableExists($tableName)) {
                $fields = [
                    'id' => [
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => true,
                        'auto_increment' => true,
                    ],
                    $column => [
                        'type' => $type,
                        'constraint' => $max,
                        'null' => false,
                    ],
                    'slug' => [
                        'type' => 'VARCHAR',
                        'constraint' => 200,
                        'null' => false,
                    ],
                    'created_at' => [
                        'type' => 'DATETIME',
                        'null' => false,
                    ],
                ];

                $forge->addField($fields);
                $forge->addKey('id', true);
                $forge->createTable($tableName, true);
            } else {
                $fields = $db->getFieldData($tableName);
                $columnExists = false;
                foreach ($fields as $field) {
                    if ($field->name === $column) {
                        $columnExists = true;
                        break;
                    }
                }

                if (!$columnExists) {
                    $newField = [
                        $column => [
                            'type' => $type,
                            'constraint' => $max,
                        ]
                    ];
                    $forge->addColumn($tableName, $newField);
                }
            }

            if (countData($this->dbcode.'table', ['name' => $tableName]) == 0) {
                $tb['name']     = $tableName;
                $tb['label']    = label(str_replace($this->dbcode, "", $tableName));
                $tb['status']   = 1;
                $this->curd->addData($this->dbcode.'table', $tb);
            }


            $id             = $this->request->getPost('id');
            $page_name      = $this->request->getPost('page_name');
            $redirect       = base_url('admin/'.$page_name);
            if ($page_name == 'setting') {
                $redirect       = base_url('admin/'.$page_name.'/edit/'.$id);
            }
            
            $data           = $this->request->getPost();
            unset($data['id'], $data['redirect'], $data['page_name']);
            foreach ($data as $fieldName => $dta) {
                if (is_array($dta)) {
                    $data[$fieldName] = json_encode($dta);
                }
            }
            $files = $this->request->getFiles();
            foreach ($files as $fieldName => $file) {
                $data[$fieldName] = $this->file_upload($id, $file, $fieldName, $page_name);
            }
            if (!empty($id)) {
                $result = $this->curd->updateData($this->dbcode . $page_name, $data, ['id' => $id]);
            } else {
                $result = $this->curd->addData($this->dbcode . $page_name, $data);
            }
            if ($result > 0) {
                $response = [
                    'respocecode' => 200,
                    'status' => 'success',
                    'message' => $page_name . ' updated successfully',
                    'url' => $redirect
                ];
            } else {
                $response = [
                    'respocecode' => 201,
                    'status' => 'error',
                    'message' => 'Something went wrong',
                    'url' => ""
                ];
            }
        } else {
            $response = [
                'respocecode' => 401,
                'status' => 'error',
                'message' => 'You don’t have permission',
                'url' => ""
            ];
        }
        echo json_encode($response);
    }


    public function delete()
    {
        if (isset($_SESSION['user']) && $_SESSION['role'] == 10) {
            $id = $this->request->getPost('id');
            $page_name = $this->request->getPost('page_name');
            $image = $this->request->getPost('image');

            $singleData = singleData($this->dbcode . $page_name, ['id' => $id]);

            if (!$singleData) {
                return $this->response->setJSON([
                    'responseCode' => 404,
                    'status' => 'error',
                    'message' => 'Record not found',
                ]);
            }

            $column = $singleData['name'];
            $table_name = $singleData['table_name'];
            
            if (count(allData($this->dbcode . $page_name, ['table_name' => $table_name])) == 1) {
                $this->curd->deleteData($this->dbcode . 'table', ['name' => $table_name]);
                $this->deleteTable($table_name);
            } else {
                $this->deleteColumn($table_name, $column);
            }   

            if (!empty($image)) {
                $imageArray = explode(',', $image);
                foreach ($imageArray as $img) {
                    if (file_exists($img) && is_writable($img)) {
                        unlink($img);
                    }
                }
            }

            

            $result = $this->curd->deleteData($this->dbcode . $page_name, ['id' => $id]);

            $response = $result ? [
                'responseCode' => 200,
                'status' => 'success',
                'message' => label($column) . ' deleted successfully from the database',
            ] : [
                'responseCode' => 201,
                'status' => 'error',
                'message' => 'An error occurred during deletion',
            ];
        } else {
            $response = [
                'responseCode' => 403,
                'status' => 'error',
                'message' => 'Permission denied',
            ];
        }

        return $this->response->setJSON($response);
    }

    public function deleteColumn($tableName, $columnName)
    {
        $forge = Database::forge();
        $db = Database::connect();

        if ($db->tableExists($tableName)) {
            $fields = $db->getFieldData($tableName);

            $columnExists = array_filter($fields, fn($field) => $field->name === $columnName);

            if ($columnExists) {
                return $forge->dropColumn($tableName, $columnName)
                    ? 'Column deleted successfully.'
                    : 'Failed to delete column.';
            } else {
                return 'Column does not exist.';
            }
        } else {
            return 'Table does not exist.';
        }
    }

    public function deleteTable($tableName)
    {
        $forge = Database::forge();

        if (Database::connect()->tableExists($tableName)) {
            return $forge->dropTable($tableName, true)
                ? 'Table deleted successfully.'
                : 'Failed to delete table.';
        } else {
            return 'Table does not exist.';
        }
    }

}
