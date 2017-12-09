<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_estudiantes extends CI_Model {

	public function registrar()
	{
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'edad' => $this->input->post('edad'),
			'telefono' => $this->input->post('telefono'),
			'direccion' => $this->input->post('direccion')
		);

		$sql = $this->db->insert('estudiantes', $data);

		if ($sql === true) {
			return true;
		}
		else{
			return false;
		}
	}

	public function editarEstudiante($id = null)
	{
		if ($id) {
			$data = array(
				'nombre' => $this->input->post('editarNombre'),
				'apellido' => $this->input->post('editarApellido'),
				'edad' => $this->input->post('editarEdad'),
				'telefono' => $this->input->post('editarTelefono'),
				'direccion' => $this->input->post('editarDireccion')
			);

			$this->db->where('id', $id);
			$sql = $this->db->update('estudiantes', $data);

			if ($sql === true) {
				return true;
			}
			else{
				return false;
			}
		}
	}
	
	public function traerDatosEstudiantes($id = null)
	{
		if ($id) {
			$sql = "SELECT * FROM estudiantes WHERE id = ?";
			$query  = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM estudiantes";
		$query  = $this->db->query($sql);
		return $query->result_array();
	}

	public function eliminarEstudiante($id = null)
	{
		if ($id) {
			$sql = "DELETE FROM estudiantes WHERE id = ?";
			$query = $this->db->query($sql, array($id));

			
			return ($query === true) ? true : false;
		}
	}

}

/* End of file model_estudiantes.php */
/* Location: ./application/models/model_estudiantes.php */