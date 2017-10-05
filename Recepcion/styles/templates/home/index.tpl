{include 'overall/Header.tpl'}

<body>
  
  {include 'overall/Nav.tpl'}

    <section class="container">
      {if isset($smarty.session.nombre)}
      <div class="row">
        <div class="col-md-5 col-md-offset-2">
          <h3><label>Puesto: <span>{$smarty.session.puesto}<span/></label></h3>
          <h3>{$smarty.now|date_format:"%d/%m/%G"}</h3>
        </div>
        <div class="col-md-4">
          <h3><label>Bienvenido <span><span/>{$smarty.session.nombre} {$smarty.session.apellido}</label></h3>
        </div>
      </div>
      <div class="row">

            
        <div class="CenterElement">
          <span class="glyphicon glyphicon-user iconPresentation"></span>
          <br>
          <label class="label label-default labelPresentation">{$smarty.session.puesto}<label/>
        </div>

      </div>
      {/if}
    </section>

    {include 'overall/Footer.tpl'}