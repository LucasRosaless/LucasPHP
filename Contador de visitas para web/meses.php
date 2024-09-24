<form id="mesForm" action="+visitas.php" method="get">


  <select class="form-control" style="width: 16.5%; text-align: center;" id="mes" name="mes" onchange="redireccionar()">
    <? if ($_GET['mes'] != "") { ?>
      <?
      if ($_GET['mes'] == "01") {
        $mimes = 'Enero';
      }
      if ($_GET['mes'] == "02") {
        $mimes = 'Febrero';
      }
      if ($_GET['mes'] == "03") {
        $mimes = 'Marzo';
      }
      if ($_GET['mes'] == "04") {
        $mimes = 'Abril';
      }
      if ($_GET['mes'] == "05") {
        $mimes = 'Mayo';
      }
      if ($_GET['mes'] == "06") {
        $mimes = 'Junio';
      }
      if ($_GET['mes'] == "07") {
        $mimes = 'Julio';
      }
      if ($_GET['mes'] == "08") {
        $mimes = 'Agosto';
      }
      if ($_GET['mes'] == "09") {
        $mimes = 'Septiembre';
      }
      if ($_GET['mes'] == "10") {
        $mimes = 'Octubre';
      }
      if ($_GET['mes'] == "11") {
        $mimes = 'Noviembre';
      }
      if ($_GET['mes'] == "12") {
        $mimes = 'Diciembre';
      }

      ?>
      <option style="color: black;" value="<?= $_GET['mes']; ?>"><?= $mimes; ?></option>

    <? } ?>
    <option value="01">Enero</option>
    <option value="02">Febrero</option>
    <option value="03">Marzo</option>
    <option value="04">Abril</option>
    <option value="05">Mayo</option>
    <option value="06">Junio</option>
    <option value="07">Julio</option>
    <option value="08">Agosto</option>
    <option value="09">Septiembre</option>
    <option value="10">Octubre</option>
    <option value="11">Noviembre</option>
    <option value="12">Diciembre</option>

  </select>
</form>

<script>
  function redireccionar() {
    var mesSeleccionado = document.getElementById("mes").value;

    var seccion = "<?php echo $sec; ?>";

    var url = "https://konectadigital.com.ar/site/whm_admin/+visitas.php?seccion=" + seccion;

    url += "&mes=" + mesSeleccionado;
    
    window.location.href = url;
  }
</script>