<?php
class Usuarios_model extends CI_Model {
  public function buscarTodos(){
    return $this->db->get("usuario")->result_array();
  }
  public function salva($usuario){
    $this->db->insert("usuarios", $usuario);
  }
  public function buscaPorEmailSenha($email, $senha){
    $this->db->where("email", $email);
    $this->db->where("senha", $senha);
    $usuario = $this->db->get("usuarios")->row_array();
    return $usuario;
  }
}
?>
