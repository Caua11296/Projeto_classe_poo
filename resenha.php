<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizzaria Bella Napoli</title>
  <style>
    /* Reset & Variáveis */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    :root {
      --primary: #e53935;
      --accent: #fbc02d;
      --bg-dark: #121212;
      --card-bg: #1e1e1e;
      --text-light: #ffffff;
      --text-muted: #aaaaaa;
    }

    body {
      background-color: var(--bg-dark);
      color: var(--text-light);
      line-height: 1.6;
    }

    /* Cabeçalho e Navegação */
    header {
      background-color: #1a1a1a;
      padding: 1rem 2rem;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: var(--primary);
    }

    .logo span {
      color: var(--accent);
    }

    .nav-links {
      display: flex;
      list-style: none;
      gap: 1.5rem;
    }

    .nav-links a {
      color: var(--text-light);
      text-decoration: none;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: var(--accent);
    }

    .cart-btn {
      background-color: var(--primary);
      color: #fff;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s;
    }

    .cart-btn:hover {
      background-color: #c62828;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                  url('https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
      height: 60vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 1rem;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: var(--accent);
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
      max-width: 600px;
    }

    .btn-main {
      background-color: var(--primary);
      color: white;
      padding: 0.8rem 1.8rem;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background 0.3s;
    }

    .btn-main:hover {
      background-color: #c62828;
    }

    /* Cardápio */
    .menu-section {
      max-width: 1200px;
      margin: 4rem auto;
      padding: 0 1rem;
    }

    .section-title {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 2rem;
      color: var(--accent);
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }

    .card {
      background-color: var(--card-bg);
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0,0,0,0.3);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      justify-content: space-between;
    }

    .card-title {
      font-size: 1.25rem;
      margin-bottom: 0.5rem;
    }

    .card-desc {
      color: var(--text-muted);
      font-size: 0.9rem;
      margin-bottom: 1rem;
    }

    .card-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 1rem;
    }

    .price {
      font-weight: bold;
      font-size: 1.1rem;
      color: #4caf50;
    }

    .add-btn {
      background-color: var(--primary);
      color: white;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .add-btn:hover {
      background-color: #c62828;
    }

    /* Rodapé */
    footer {
      background-color: #1a1a1a;
      text-align: center;
      padding: 2rem;
      margin-top: 4rem;
      border-top: 1px solid #333;
    }

    footer p {
      color: var(--text-muted);
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
    }
  </style>
</head>
<body>

  <!-- Menu de Navegação -->
  <header>
    <nav>
      <div class="logo">Bella<span>Napoli</span></div>
      <ul class="nav-links">
        <li><a href="#home">Início</a></li>
        <li><a href="#menu">Cardápio</a></li>
        <li><a href="#contato">Contato</a></li>
      </ul>
      <button class="cart-btn" id="cart-btn">Carrinho (0)</button>
    </nav>
  </header>

  <!-- Banner Principal -->
  <section class="hero" id="home">
    <h1>A Verdadeira Pizza Artesanal</h1>
    <p>Massa de fermentação natural, molho de tomate italiano e ingredientes frescos assados no forno a lenha.</p>
    <a href="#menu" class="btn-main">Ver Cardápio</a>
  </section>

  <!-- Seção do Cardápio -->
  <section class="menu-section" id="menu">
    <h2 class="section-title">Nosso Cardápio</h2>
    <div class="grid">
      
      <!-- Item 1 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1574071318508-1cdbab80d002?auto=format&fit=crop&w=500&q=80" alt="Pizza Margherita">
        <div class="card-content">
          <div>
            <h3 class="card-title">Margherita</h3>
            <p class="card-desc">Molho de tomate fresco, muçarela especial, manjericão e azeite extravirgem.</p>
          </div>
          <div class="card-footer">
            <span class="price">R$ 45,00</span>
            <button class="add-btn" onclick="addToCart()">Adicionar</button>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1628840042765-356cda07504e?auto=format&fit=crop&w=500&q=80" alt="Pizza Calabresa">
        <div class="card-content">
          <div>
            <h3 class="card-title">Calabresa Especial</h3>
            <p class="card-desc">Calabresa fatiada, cebola roxa, azeitonas pretas e orégano sobre muçarela.</p>
          </div>
          <div class="card-footer">
            <span class="price">R$ 48,00</span>
            <button class="add-btn" onclick="addToCart()">Adicionar</button>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=500&q=80" alt="Pizza Quatro Queijos">
        <div class="card-content">
          <div>
            <h3 class="card-title">Quatro Queijos</h3>
            <p class="card-desc">Muçarela, gorgonzola, parmesão ralado e catupiry original.</p>
          </div>
          <div class="card-footer">
            <span class="price">R$ 52,00</span>
            <button class="add-btn" onclick="addToCart()">Adicionar</button>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Rodapé -->
  <footer id="contato">
    <p>Pizzaria Bella Napoli &copy; Todos os direitos reservados.</p>
    <p>Rua das Pizzas, 123 - Centro | Pedidos via WhatsApp: (11) 99999-9999</p>
  </footer>

  <!-- Interatividade JavaScript -->
  <script>
    let cartCount = 0;

    function addToCart() {
      cartCount++;
      const cartBtn = document.getElementById('cart-btn');
      cartBtn.innerText = `Carrinho (${cartCount})`;
      
      // Animação simples no botão do carrinho
      cartBtn.style.transform = 'scale(1.1)';
      setTimeout(() => cartBtn.style.transform = 'scale(1)', 150);
    }
  </script>

</body>
</html>