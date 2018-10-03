<?php
require_once ("../config.class.php");

class uploadPreCadastro
{

    public $conn;

     function insereDados($nome,$email,$cpf,$perfil,$curso,$semestre)
    {
        $conexao = new conexao();
        $this->conn = $conexao->conect();
        print_r($conn);

        $sql = "CALL USP_UPLOAD_PRE_CADASTRO('$nome', '$email', '$cpf', '$perfil', $curso, $semestre)";

        try{
            $db = $this->conn->prepare($sql);
            $db->execute();
            echo "true";
        }
        catch (PDOException $ex) {
            echo 'false';
            return "Erro ao cadastrar, Erro: " . $ex->getMessage();
        }

    }
}

?>