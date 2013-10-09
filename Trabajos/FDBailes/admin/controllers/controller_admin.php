<?php
class Controlleradmin
{
    private $model;
	private $view;
	
    public function __construct($model, $view) 
    {
        $this->model = $model;
		$this->view = $view;
    }
	public function imprimirPagina()
	{
		$this->view->muestraPagina();
	}
	public function imprimirTablarep()
	{
		$this->view->generaTablarep($this->model->consultaReparaciones());
	}
	public function imprimirTablacli()
	{
		$this->view->generaTablacli($this->model->consultaClientes());
	}
	public function imprimirBuscador()
	{
		$this->view->generaBuscador();
	}
	public function imprimirFormrep()
	{
		$this->view->generaFormrep();
	}
	public function imprimirFormcli()
	{
		$this->view->generaFormcli($this->model->consultaNextidcli());
	}
	public function imprimirDetallerep($id_reparacion)
	{
		$this->view->generaDetallerep($this->model->consultaDetallerep($id_reparacion));
	}
	public function imprimirDetallecli($id_cliente)
	{
		$this->view->generaDetallecli($this->model->consultaDetallecli($id_cliente));
	}
	public function imprimirBusquedarep($valor_principal,$valor_secundario,$tipo_busqueda)
	{
		if ($valor_principal == null)
		{
			$valor_principal = '%';
		}
		if ($valor_secundario == null)
		{
			$valor_secundario = '%';
		}
		$consulta=$this->model->consultaBusquedarep($valor_principal,$valor_secundario,$tipo_busqueda);
		if ($consulta == null)
		{
			return false;
		}
		else
		{
			$this->view->generaBusquedarep($consulta);
		}
	}
	public function imprimirBusquedacli($valor_principal,$valor_secundario,$tipo_busqueda)
	{
		if ($valor_principal == null)
		{
			$valor_principal = '%';
		}
		if ($valor_secundario == null)
		{
			$valor_secundario = '%';
		}
		$consulta=$this->model->consultaBusquedacli($valor_principal,$valor_secundario,$tipo_busqueda);
		if ($consulta == null)
		{
			return false;
		}
		else
		{
			$this->view->generaBusquedacli($consulta);
		}
	}
	public function insertaCli($arreglo)
	{
		foreach ($arreglo as $valor)
		{
			$valor = trim($valor);
		}
		$arreglo['nombre'] = ucfirst($arreglo['nombre']);
		$arreglo['apellido'] = ucfirst($arreglo['apellido']);
		$arreglo['direccion'] = ucfirst($arreglo['direccion']);
		if (!$arreglo['mail'])
		{
			$arreglo['mail'] = '-';
		}
		$this->model->guardaCli($arreglo);
	}
}
?>