<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		// form_validation
		$this->load->library('form_validation');

		// Model
		$this->load->model('model_estudiantes');
	}

	public function index()
	{
		
	}

	public function registrar()
	{

		$validator = array('success' => false, 'messages' => array());

		$config = array(
			array(
				'field' => 'nombre',
				'label' => 'nombre',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'apellido',
				'label' => 'apellido',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'edad',
				'label' => 'edad',
				'rules' => 'trim|required|integer'
			),
			array(
				'field' => 'telefono',
				'label' => 'teléfono',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'direccion',
				'label' => 'dirección',
				'rules' => 'trim|required'
			)
		);

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() === true) {

			$registrarEstudiante = $this->model_estudiantes->registrar();

			if ($registrarEstudiante === true) {
				$validator['success'] = true;
				$validator['messages'] = "Estudiante registrado correctamente";
			}
			else{
				$validator['success'] = false;
				$validator['messages'] = "Error al registrar el estudinate";
			}
		}
		else{
			$validator['success'] = false;
			foreach ($_POST as $key => $value) {
				$validator['messages'][$key] = form_error($key);
			}
		}

		echo json_encode($validator);
	}

	public function traerDatosEstudiantes()
	{
		$result = array('data' => array());

		$data = $this->model_estudiantes->traerDatosEstudiantes();
		foreach ($data as $key => $value) {
			$nombre = $value['nombre'] . ' ' . $value['apellido'];

			$botones = '
			<div class="btn-group">
				<button type="button" class="btn btn-info btn-flat" onclick="verEstudiante('.$value['id'].')" data-toggle="modal" data-target="#verEstudiante"><i class="fa fa-eye"></i></button>
        <button type="button" class="btn btn-warning btn-flat" onclick="editarEstudiante('.$value['id'].')" data-toggle="modal" data-target="#editarEstudiante"><i class="fa fa-pencil"></i></button>
        <button type="button" class="btn btn-danger btn-flat" onclick="eliminarEstudiante('.$value['id'].')" data-toggle="modal" data-target="#eliminarEstudiante"><i class="fa fa-user-times"></i></button>
      </div>
			';

			$result['data'][$key] = array(
				$nombre,
				$value['edad'],
				$value['telefono'],
				$value['direccion'],
				$botones
			);
		}

		echo json_encode($result);
	}

	public function traerInfoEstudianteSeleccionado($id)
	{
		if ($id) {
			$data = $this->model_estudiantes->traerDatosEstudiantes($id);
			echo json_encode($data);
		}
	}

	public function editarEstudiante($id = null)
	{
		if ($id)
		{

			$validator = array('success' => false, 'messages' => array());

			$config = array(
				array(
					'field' => 'editarNombre',
					'label' => 'nombre',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'editarApellido',
					'label' => 'apellido',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'editarEdad',
					'label' => 'edad',
					'rules' => 'trim|required|integer'
				),
				array(
					'field' => 'editarTelefono',
					'label' => 'teléfono',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'editarDireccion',
					'label' => 'dirección',
					'rules' => 'trim|required'
				)
			);

			$this->form_validation->set_rules($config);
			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

			if ($this->form_validation->run() === true) {

				$editarEstudiante = $this->model_estudiantes->editarEstudiante($id);

				if ($editarEstudiante === true) {
					$validator['success'] = true;
					$validator['messages'] = "Estudiante actualizado correctamente";
				}
				else{
					$validator['success'] = false;
					$validator['messages'] = "Error al actualizar el estudinate";
				}
			}
			else{
				$validator['success'] = false;
				foreach ($_POST as $key => $value) {
					$validator['messages'][$key] = form_error($key);
				}
			}

			echo json_encode($validator);
		}
	}

	public function eliminarEstudiante($id = null)
	{
		if ($id) {
			$validator = array('success' => false, 'messages' => array());

			$eliminarEstudiante = $this->model_estudiantes->eliminarEstudiante($id);
			if ($eliminarEstudiante === true) {
				$validator['success'] = true;
				$validator['messages'] = "Estudiante eliminado correctamente";
			}
			else{
				$validator['success'] = flase;
				$validator['messages'] = "Error al eliminar el estudinate";
			}

			echo json_encode($validator);
		}
	}

}

/* End of file Estudiantes.php */
/* Location: ./application/controllers/Estudiantes.php */