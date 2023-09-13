<?php

class Cliente extends CI_Controller {

    
        public function index()
        {
            $lista=$this->cliente_model->listaclientes();
            $data['clientes']=$lista;


            $this->load->view('inicio');
            $this->load->view('cli_lista',$data);
        }

   
       
        public function agregar()
        {
            $this->load->view('inicio');
            $this->load->view('cli_formulario');  //mostrar formulario para agregar un nuevo cliente//

        } 

        public function agregarbd()
        {
            $this->load->view('inicio');  //mostrar formulario para agregar un nuevo cliente a BD//

            $data['nombre']=$_POST['nombre'];
            $data['primerApellido']=$_POST['apellido1'];
            $data['segundoApellido']=$_POST['apellido2'];

            $this->cliente_model->agregarcliente($data);
            redirect('cliente/index','refresh');

        }

        public function eliminarbd()
        {
            $this->load->view('inicio'); 

            $idcliente=$_POST['idcliente'];
            $this->cliente_model->eliminarcliente($idcliente);

            redirect('cliente/index','refresh');
        }

        public function modificar()
        {
            $this->load->view('inicio');
            $idcliente=$_POST['idcliente'];
            $data['infocliente']=$this->cliente_model->recuperarcliente($idcliente);

            $this->load->view('cli_modificar',$data);
        }

        public function modificarbd()
        {
            $idcliente=$_POST['idcliente'];
            $data['nombre']=$_POST['nombre'];
            $data['primerApellido']=$_POST['apellido1'];
            $data['segundoApellido']=$_POST['apellido2'];
            $this->cliente_model-> modificarcliente($idcliente,$data);

            redirect('cliente/index','refresh');
        }
       
        public function deshabilitarbd()
        {
            $idcliente=$_POST['idcliente'];
            $data['habilitado']='0';

            $this->cliente_model-> modificarcliente($idcliente,$data);

            redirect('cliente/index','refresh');

        }

        public function habilitarbd()
        {
            $idcliente=$_POST['idcliente'];
            $data['habilitado']='1';

            $this->cliente_model-> modificarcliente($idcliente,$data);

            redirect('cliente/deshabilitados','refresh');

        }

        public function deshabilitados()
        {
            $lista=$this->cliente_model->listaclientesdes();
            $data['clientes']=$lista;


            $this->load->view('inicio');
            $this->load->view('cli_listades',$data);
        }
}