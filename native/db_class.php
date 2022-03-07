<?php
include_once('connection.php');

class DbClass {
  private $tableName = 'mahasiswa';

  function cleanData($val) {
    return pg_escape_string($val);
  }

  function tambahMhs() {
    $sql = "insert into " . $this->tableName . " (nim, nama, kelas) values('" . $this->cleanData($_POST['nim']) . "','" .
	    $this->cleanData($_POST['nama']) . "','" . $this->cleanData($_POST['kelas']) . "')";
	  return pg_affected_rows(pg_query($sql));	
  }

  function getMhs() {
    $sql = "select * from " . $this->tableName . " order by nim";
	  return pg_query($sql);
  }

  function getMhsByNim() {
    $sql = "select * from " . $this->tableName . " where nim='" . $this->cleanData($_POST['nim']) . "'";
	  return pg_query($sql);
  }

  function deleteMhs() {
    $sql = "delete from " . $this->tableName . " where id='" . $this->cleanData($_POST['id']) .  "'";
	  return pg_query($sql);
  }

  function updateMhs($data=array()) {
    $sql = "update " . $this->tableName . " set " .
	  "nama='" . $this->cleanData($_POST['nama']) . "', " .
	  "kelas='" . $this->cleanData($_POST['kelas']) . "' " .
	  "where nim='" . $this->cleanData($_POST['nim']) . "'";
	  return pg_affected_rows(pg_query($sql));
  }

}
?>
