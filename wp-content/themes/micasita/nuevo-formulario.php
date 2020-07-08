<?php
/*
 * Template Name: NuevoFormulario
 */
 
// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );?>

 
<?php get_header();?>

        <?php     global $wpdb; // Este objeto global permite acceder a la base de datos de WP
        $tabla_demostracion = $wpdb->prefix . 'demostracion';

        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
         
        $wpdb->insert(
            $tabla_demostracion,
            array(
                'usuario' => $usuario,
                'clave' => $clave
                           )
        );

       
echo "<script>alert('".$usuario."');</script>"; 
echo "<script>alert('".$clave."');</script>"

?>
  
   



    <div class="container">
  <h2>Form Validation</h2>
  <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p>
  <form action="<?php get_the_permalink(); ?>" class="was-validated" method="post">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Clave:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



<?php get_footer();?>
 