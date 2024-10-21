<?php 
if(isset($_GET['comprar']))
 $producto = $_GET['comprar']
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Compra con Departamentos y Ciudades</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .thank-you {
      margin-top: 20px;
      font-size: 1.2rem;
      text-align: center;
      color: #28a745;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="form-container">
          <h2 class="text-center mb-4">Formulario de Compra</h2>
          
          <form id="orderForm">
            <!-- Nombre -->
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre" required>
            </div>

            <!-- Apellido -->
            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="apellido" placeholder="Escribe tu apellido" required>
            </div>

            <!-- Número de WhatsApp -->
            <div class="mb-3">
              <label for="whatsapp" class="form-label">Número de WhatsApp</label>
              <input type="tel" class="form-control" id="whatsapp" placeholder="Escribe tu número de WhatsApp" required>
            </div>
            <!-- pruducto -->
            <div class="mb-3">
              <label for="producto" class="form-label">Producto</label>
              <input type="text" class="form-control" id="pruducto" value="<?=$producto?>" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Escribe tu correo electrónico" required>
            </div>

            <!-- Dirección Completa -->
            <div class="mb-3">
              <label for="direccion" class="form-label">Dirección Completa</label>
              <input type="text" class="form-control" id="direccion" placeholder="Escribe tu dirección completa" required>
            </div>

            <!-- Departamento -->
            <div class="mb-3">
              <label for="departamento" class="form-label">Departamento</label>
              <select id="departamento" class="form-select" required>
                <option value="">Selecciona un departamento</option>
              </select>
            </div>

            <!-- Ciudad -->
            <div class="mb-3">
              <label for="ciudad" class="form-label">Ciudad</label>
              <select id="ciudad" class="form-select" required>
                <option value="">Selecciona una ciudad</option>
              </select>
            </div>

            <!-- Botón para enviar la información a WhatsApp -->
            <div class="d-grid gap-2">
              <button type="button" class="btn btn-success btn-lg" onclick="sendToWhatsApp()">Enviar por WhatsApp</button>
            </div>
          </form>

          <!-- Mensaje de agradecimiento -->
          <div class="thank-you">
            ¡Gracias por tu compra, nos pondremos en contacto contigo muy pronto!
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Lista de departamentos y ciudades de Colombia
    const departamentosCiudades = {
      "Antioquia": ["Medellín", "Bello", "Itagüí", "Envigado"],
      "Cundinamarca": ["Bogotá", "Soacha", "Chía", "Zipaquirá"],
      "Valle del Cauca": ["Cali", "Palmira", "Buenaventura", "Tuluá"],
      "Atlántico": ["Barranquilla", "Soledad", "Malambo", "Sabanalarga"],
      // Agrega más departamentos y ciudades aquí
    };

    // Rellenar los departamentos en el select
    const departamentoSelect = document.getElementById('departamento');
    const ciudadSelect = document.getElementById('ciudad');

    for (let departamento in departamentosCiudades) {
      const option = document.createElement('option');
      option.value = departamento;
      option.textContent = departamento;
      departamentoSelect.appendChild(option);
    }

    // Actualizar las ciudades dependiendo del departamento seleccionado
    departamentoSelect.addEventListener('change', function () {
      const ciudades = departamentosCiudades[this.value] || [];
      
      // Limpiar las ciudades anteriores
      ciudadSelect.innerHTML = '<option value="">Selecciona una ciudad</option>';
      
      // Añadir las nuevas ciudades
      ciudades.forEach(function (ciudad) {
        const option = document.createElement('option');
        option.value = ciudad;
        option.textContent = ciudad;
        ciudadSelect.appendChild(option);
      });
    });

    function sendToWhatsApp() {
      var nombre = document.getElementById("nombre").value;
      var apellido = document.getElementById("apellido").value;
      var whatsapp = document.getElementById("whatsapp").value;
      var email = document.getElementById("email").value;
      var direccion = document.getElementById("direccion").value;
      var ciudad = document.getElementById("ciudad").value;
      var departamento = document.getElementById("departamento").value;

      var mensaje = "Hola, mi nombre es " + nombre + " " + apellido + ".\n" +
                    "Mi número de WhatsApp es: " + whatsapp + "\n" +
                    "Mi email es: " + email + "\n" +
                    "Mi dirección es: " + direccion + ", " + ciudad + ", " + departamento + ".\n" +
                    "¡Gracias por tu atención!";

      var numeroVendedor = "573217118243"; // Cambia por el número del vendedor

      var url = "https://api.whatsapp.com/send?phone=" + numeroVendedor + "&text=" + encodeURIComponent(mensaje);

      window.open(url, '_blank');
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
