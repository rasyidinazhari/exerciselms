$(document).ready(function() {
    // Event listener for the submit button
    $('#submitpathdkel1').click(function() {
      // Get data from the form
      var nama = $('#namapathdkel1').val();
      var minat = $('#minatpathdkel1').val();

      // Make an AJAX request to add data to the table using POST method
      $.ajax({
        url: 'content/pathdkel1.php',
        type: 'POST',
        data: {
          nama: nama,
          minat: minat
        },
        success: function(response) {
          // Add the new data to the table
          $('#tablepathdkel1 tbody').prepend('<tr class="indextabledkel1"><td>' + nama + '</td><td>' + minat + '</td></tr>');
        },
        error: function(error) {
          console.error('Error:', error);
        }
      });
    });
  });