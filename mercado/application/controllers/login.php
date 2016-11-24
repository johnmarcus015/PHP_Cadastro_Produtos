<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');
  class Login extends CI_Controller {
    public function autenticar(){
      $this->output->enable_profiler(TRUE);
      $this->load->model("usuarios_model");
      $email = $this->input->post("email");
      $senha = md5($this->input->post("senha"));
      $usuario = $this->usuarios_model->buscaPorEmailSenha($email, $senha);
      if($usuario){
        $this->session->set_userdata(array("usuario_logado"=>$usuario));
        $this->session->set_flashdata("success", "Logado com sucesso!");
        $dados = array("mensagem" => "Logado com sucesso!");
      }else{
        //$dados = array("mensagem" => "Usuário ou senha inválidos!");
        $this->session->set_flashdata("danger", "Usuário ou senha inválidos!");
      }
      //$this->load->view("login/autenticar", $dados);
      redirect('/');
    }
    public function logout(){
      $this->session->set_flashdata("success","Deslogado com sucesso!");
      $this->session->unset_userdata("usuario_logado");
      //$this->load->view("login/logout");
      redirect('/');
    }
  }
?>
