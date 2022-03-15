<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="cadastro.php" method="post">
         <table>
             <tr>
                 <td>
                     <b>Nome Completo</b>
                 </td>
                 <td>
                     <input type="text" name="nomec">
                 </td>
             </tr>
             <tr>
                 <td>
                     <b>Nome do Pai</b>
                 </td>
                 <td>
                     <input type="text" name="nomep">
                 </td>
             </tr>
             <tr>
                 <td>
                     <b> Nome da Mãe</b>
                 </td>
                 <td>
                     <input type="text" name="nomem">
                 </td>
             </tr>
             <tr>
                 <td>
                     <b>Sexo</b>
                 </td>
                 <td>
                     <input type="radio" value="Masculino" name="sexo">Masculino
                     <input type="radio" value="Feminino" name="sexo">Feminino
                 </td>
             </tr>
             <tr>
                 <td>
                     <b>Data de Nascimento</b>
                 </td>
                 <td>
                     <input type="date" name="nasc">
                 </td>
             </tr>
             <tr>
                 <td>
                     <b>CPF</b>
                 </td>
                 <td>
                     <input type="text" name="cpf">
                 </td>
             </tr>
             <tr>
                 <td>
                     <b>Escolaridade</b>
                 </td>
                 <td>
                     <select name="esc">
                         <option value=" ">Xx- Selecione -xX</option>
                         <option value="Ensino Superior">Ensino Superior</option>
                         <option value="Ensino Médio">Ensino Médio</option>
                         <option value="Ensino Fundamnetal">Ensino Fundamental</option>
                     </select>
                 </td>
             </tr>
             <tr>
                 <td>
                     <b>Nacionalidade</b>
                 </td>
                 <td>
                     <select name="nac">
                         <option value=" ">xx- Selecione -xX</option>
                         <option value="Ucraniano">Ucraniano</option>
                         <option value="Nigeriano">Nigeriano</option>
                         <option value="Brasileiro">Brasileiro</option>
                         <option value="Russo">Russo</option>
                         <option value="Vietnamita">Vietnamita</option>
                     </select>
                 </td>
             </tr>
             <tr>
                 <td>
                     <b>Interesses</b>
                 </td>
                 <td>
                     <input type="checkbox" name="int[]" value="Geografia">Geografia <br>
                     <input type="checkbox" name="int[]" value="Artes">Artes <br>
                     <input type="checkbox" name="int[]" value="Português">Português <br>
                     <input type="checkbox" name="int[]" value="Matemática">Matemática <br>
                     <input type="checkbox" name="int[]" value="História">História <br>
                     <input type="checkbox" name="int[]" value="Física">Física <br>
                     <input type="checkbox" name="int[]" value="Biologia">Biologia <br>
                     <input type="checkbox" name="int[]" value="Química">Química <br>
                     <input type="checkbox" name="int[]" value="Filosofia">Filosofia <br>
                 </td> 
             </tr>
             <tr>
                 <td><button type="submit"><b>Cadastre-se</b></button></td>
             </tr>
         </table>
    </form>
</body>
</html>