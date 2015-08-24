<html>
    <head>
      <style type="text/css">
      body{
        margin: 0;
        padding: 5mm;
      }
      table, td, tr{
        margin: 0;
        padding: 0;
      }

      .logo_pdf{
            float: left;
        }
        .trab_ac_pdf{
            text-align: right;
            font-size: 11px;
            font-family: 'Times New Roman';
        }
        .trabalho_pdf_titulo{
            text-transform: uppercase;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
            font-family: 'Times New Roman';
            top: 0;
            bottom: 0;
        }
        .trabalho_pdf{
            text-align: center;
            font-size: 15px;
            font-family: 'Times New Roman';
            top: 0;
            bottom: 0;
        }
        .trabalho_pdf_resumo{
            text-align: justify;
            font-size: 15px;
            font-family: 'Times New Roman';
            top: 0;
            bottom: 0;
        }
        .trabalho_pdf_rodape{
            text-align: left;
            font-size: 15px;
            font-family: 'Times New Roman';
            top: 0;
            bottom: 0;
        }
    </style>

      <link rel="shortcut icon" media="all" type="image/x-icon" href="favicon.png" >
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    </head>

    <body>
        
    <div class="cont_pdf">
          <input type="hidden" id="base_url" value="<?=base_url()?>" />

          <script type="text/javascript">
              window.base_url = $('#base_url').val();
          </script>

      <table class = "logo_trabalho_pdf" width="100%">
      <tr>