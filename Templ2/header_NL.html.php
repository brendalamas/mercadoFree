<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container p-4"><a href="#" class="navbar-brand fw-bold">
                    <img src="./img2/mercadofree-logo.png" alt="logo"> Mercado Free</a>
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation" class="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarSupportedContent" class=" navbar-collapse collapse" style="">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a aria-current="page" class="nav-link active" href="">Ofertas</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Especiales</a></li>
                    </ul>
                    <li class="d-flex"><a class="nav-link" href="./registrar.php">Creá tu cuenta</a><a class="nav-link" href="./login.php">Ingresar</a></li>
                    <form role="search" class="d-flex" style="width: 270px;" onsubmit="searchProducts(event)">
                        <input type="search" id="searchInput" placeholder="Search" aria-label="Search" class="form-control me-2">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>


                </div>
            </div>
        </nav>

        <div id="searchResults">
        </div>

    </header>
    <script>
        function searchProducts(event) {
            var inicial = document.getElementById("grilla");

            event.preventDefault();

            const searchInput = document.getElementById('searchInput');
            const searchTerm = searchInput.value.trim();
            if (searchTerm === '') {
                window.location.reload();
                return;
            }
            fetch(`search.php?search=${encodeURIComponent(searchTerm)}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Error en la respuesta del servidor: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    const searchResultsDiv = document.getElementById('searchResults');
                    searchResultsDiv.innerHTML = '';

                    if (data.success && data.data.length > 0) {
                        const resultList = document.createElement('ul');
                        resultList.style.marginTop= "25px"

                        data.data.forEach(product => {
                            const listItem = document.createElement('li');
                            listItem.style.listStyle = 'none';

                            const productLink = document.createElement('a');
                            productLink.href = `./detalle_prod.php?id_prod=${product.id_producto}`;
                            productLink.style.display = 'flex';
                            productLink.style.flexDirection = 'row';
                            productLink.style.justifyContent = 'start';
                            productLink.style.alignItems = 'center';
                            productLink.style.textDecoration = 'none';

                            const imageElement = document.createElement('img');
                            imageElement.src = product.img;
                            imageElement.alt = `Imagen de ${product.nombre}`;
                            imageElement.style.width = '100px';

                            const detailsElement = document.createElement('div');
                            detailsElement.style.marginLeft = '10px';
                            detailsElement.style.display = 'flex';
                            detailsElement.style.color = 'black';

                            const titleElement = document.createElement('div');
                            titleElement.textContent = product.nombre;
                            titleElement.style.fontSize = '20px';
                            titleElement.style.fontWeight = 'bold';

                            const priceElement = document.createElement('div');
                            priceElement.textContent = `$ ${product.precio}`;
                            priceElement.style.fontSize = '22px';
                            priceElement.style.marginLeft = '10px';

                            detailsElement.appendChild(titleElement);
                            detailsElement.appendChild(priceElement);

                            productLink.appendChild(imageElement);
                            productLink.appendChild(detailsElement);

                            listItem.appendChild(productLink);

                            resultList.appendChild(listItem);
                        });

                        //searchResultsDiv.appendChild(resultList);
                        inicial.innerHTML = '';
                        inicial.appendChild(resultList);
                    } else {
                        inicial.textContent = 'No hay productos relacionados con tu búsqueda';
                        inicial.style.fontSize = "18px"
                    }
                })
                .catch(error => {
                    console.error('Error al obtener los resultados de búsqueda:', error);
                });
        }
    </script>
</body>

</html>