<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">
            <img src="../assets/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-2">
            Sandwech | Admin
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="homePage.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Caratteristiche
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="addAllergen.php">Aggiungi Allergeni</a></li>
                        <li><a class="dropdown-item" href="addClass.php">Aggiungi Classi</a></li>
                        <li><a class="dropdown-item" href="addIngredient.php">Aggiungi Ingredienti</a></li>
                        <li><a class="dropdown-item" href="addOffer.php">Aggiungi Offerte</a></li>
                        <li><a class="dropdown-item" href="addPickup.php">Aggiungi Ritiro</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Prodotti
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Aggiungi Prodotti</a></li>
                        <li><a class="dropdown-item" href="addTag.php">Aggiungi Tags</a></li>
                        <li><a class="dropdown-item" href="">Cancella Tags</a></li>
                        <li><a class="dropdown-item" href="disactiveProduct.php">Disattiva Prodotti</a></li>
                        <li><a class="dropdown-item" href="">Cambia Quantità</a></li>
                        <li><a class="dropdown-item" href="">Cambia Offerte</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Utenti
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="disactiveUser.php">Disattiva Utenti</a></li>
                        <li><a class="dropdown-item" href="">Visualizza Preferiti</a></li>
                        <li><a class="dropdown-item" href="">Visualizza Ordini</a></li>
                        <li><a class="dropdown-item" href="">Visualizza Ordini Singoli</a></li>
                        <li><a class="dropdown-item" href="">Cambia Password</a></li>
                        <li><a class="dropdown-item" href="">Visualizza Carrelli</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Cerca un ordine..." aria-label="Search">
                <button class="btn btn-outline-primary me-4" type="submit">Cerca</button>
            </form>
            <form class="d-flex" role="search">
            </form>
            <a href="../function/logout.php">
            <button class="btn btn-outline-primary">Esci</button>
            </a>
        </div>
    </div>
</nav>