<?php
class AbmPersona{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param){
        $obj = null;

        if( array_key_exists('NroDni',$param) and array_key_exists('Apellido',$param) and array_key_exists('Nombre',$param) and array_key_exists('fechaNac',$param) and array_key_exists('Telefono',$param) and array_key_exists('Domicilio',$param)){
            
            $obj = new Persona();
            $obj->setear($param['NroDni'], $param['Apellido'],$param['Nombre'],$param['fechaNac'],$param['Telefono'],$param['Domicilio']);
        }
        return $obj;
    }


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Persona
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if(isset($param['NroDni']) ){

            $obj = new Persona();
            
            $obj->setear($param['NroDni'],null, null,null,null,null);
            
        }
        return $obj;
    }


    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param){
        $resp = false;

        if (isset($param['NroDni']))
            $resp = true;
        return $resp;
    }


    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        $unObjPersona = $this->cargarObjeto($param);

        if ($unObjPersona!=null and $unObjPersona->insertar()){
            $resp = true;
        }
        return $resp;  
    }

    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        
        if ($this->seteadosCamposClaves($param)){
            $unObjPersona = $this->cargarObjetoConClave($param);
            //verEstructura($unObjPersona);
            if ($unObjPersona!=null and $unObjPersona->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }



    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        $resp = false;
        
        if ($this->seteadosCamposClaves($param)){
            $unObjPersona = $this->cargarObjeto($param);
            //verEstructura($unObjPersona);
            if($unObjPersona != null and $unObjPersona->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }



    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){
        $where = " true ";

        if ($param<>NULL){
            if  (isset($param['NroDni']))
                $where.=" and NroDni ='".$param['NroDni']."'";
            if  (isset($param['Apellido']))
                 $where.=" and Apellido ='".$param['Apellido']."'";
            if  (isset($param['Nombre']))
                 $where.=" and Nombre ='".$param['Nombre']."'";
        }

        $arreglo = Persona::listar($where);  
        return $arreglo;
    }


}
?>