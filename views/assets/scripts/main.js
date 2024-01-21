$(document).ready(function () {

  $('.more').click(function (event) {
    event.preventDefault();


    var categoria = $(this).closest('.dashboard-stat').find('.desc').text().trim();
    console.log("valor de categoria: " + categoria);


    $.ajax({
      url: '../controller/dashboard.php',
      type: 'GET',
      data: { categoria: categoria },
      dataType: 'json',
      success: function (data) {

        console.log("valor de data: " + data);
        atualizaTabela(data, categoria);
      },
      error: function (error) {
        console.log('Error:', error);
      }
    });
  });

  function atualizaTabela(data, categoria) {
    $('#dynamic-table tbody').empty();
    $('#dynamic-table thead').empty();
    console.log(categoria);

    switch (categoria) {
      case 'Clientes':
        $('#dynamic-table thead').append(`
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Endereco</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Status</th>
          </tr>
        `);
        break;
      case 'Usuários':
        $('#dynamic-table thead').append(`
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Endereco</th>
            <th>Telefone</th>
            <th>Usuario</th>
            <th>Status</th>
          </tr>
        `);
        break;
      case 'Fornecedores':
        $('#dynamic-table thead').append(`
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Cidade</th>
            <th>Email</th>
            <th>Status</th>
          </tr>
        `);
        break;
      default: return;
    }

    $.each(data, function (index, item) {
      console.log(`iteracao ${item.nome} ${index}`);

      switch (categoria) {
        case 'Clientes':
          $('#dynamic-table tbody').append(
            `<tr>
                <td>${(index + 1)}</td>
                <td>${item.nome}</td>
                <td>${item.cpf}</td>
                <td>${item.endereco}</td>
                <td>${item.telefone}</td>
                <td>${item.email}</td>
                <td><span class="label label-sm label-success">Aprovado</span></td>
              </tr>`
          );
          break;
        case 'Usuários':
          $('#dynamic-table tbody').append(
            `<tr>
                <td>${(index + 1)}</td>
                <td>${item.nome}</td>
                <td>${item.cpf}</td>
                <td>${item.endereco}</td>
                <td>${item.telefone}</td>
                <td>${item.usuario}</td>
                <td><span class="label label-sm label-success">Aprovado</span></td>
              </tr>`
          );
          break;
        case 'Fornecedores':
          $('#dynamic-table tbody').append(
            `<tr>
                <td>${(index + 1)}</td>
                <td>${item.nome}</td>
                <td>${item.cpf}</td>
                <td>${item.cidade}</td>
                <td>${item.email}</td>
                <td><span class="label label-sm label-success">Aprovado</span></td>
              </tr>`
          );
          break;
        default: return;
      }


    });
  }
  $(document).on('click', '.visualizarLink', function () {
    var dashboardStat = $(this).closest('.dashboard-stat');
    var colorClass = dashboardStat.attr('class').split(/\s+/)[1];
    //alert(colorClass); // 
    var portletBox = $('.portlet.box');
    portletBox.removeClass().addClass('portlet box ' + colorClass);

    var modalTitle = $('.modal-title');
    modalTitle.removeClass().addClass('modal-title ' + colorClass);
  });
});


