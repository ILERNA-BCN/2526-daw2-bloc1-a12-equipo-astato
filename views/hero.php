<style>
  .hero-section {
    background: linear-gradient(135deg, #f5f5f0 0%, #faf9f6 100%);
    color: #000;
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
  }

  /* Textura amarilla superior derecha */
  .texture-yellow {
    position: absolute;
    top: -5%;
    right: 10%;
    width: 450px;
    height: 450px;
    background-image: url('./assets/images/amarillo.svg');
    background-size: contain;
    background-repeat: no-repeat;
    opacity: 0.6;
    z-index: 0;
  }

  /* Textura naranja inferior izquierda */
  .texture-orange {
    position: absolute;
    bottom: 5%;
    left: -5%;
    width: 400px;
    height: 400px;
    background-image: url('./assets/images/naranaj2.svg');
    background-size: contain;
    background-repeat: no-repeat;
    opacity: 0.7;
    z-index: 0;
  }

  .hero-section .container {
    position: relative;
    z-index: 1;
  }

  .hero-title {
    font-size: 5rem;
    font-weight: 300;
    line-height: 0.95;
    margin-bottom: 1.5rem;
    text-transform: lowercase;
  }

  .hero-title .creativity {
    display: block;
    font-size: 5.5rem;
    font-weight: 300;
    font-style: normal;
  }

  .hero-title .never-ends {
    display: block;
    font-size: 6rem;
    font-weight: 700;
    font-style: normal;
    position: relative;
  }

  .hero-subtitle {
    font-size: 1.5rem;
    font-weight: 400;
    margin: 2rem 0;
    font-style: italic;
  }

  .hero-description {
    font-size: 0.85rem;
    line-height: 1.6;
    color: #333;
    margin-bottom: 2.5rem;
    max-width: 400px;
  }

  .btn-hero {
    background: #000;
    border: 2px solid #000;
    color: #fff;
    font-weight: 600;
    padding: 0.9rem 2.2rem;
    font-size: 0.85rem;
    border-radius: 0;
    text-transform: capitalize;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
  }

  .btn-hero:hover {
    background: transparent;
    color: #000;
    border-color: #000;
  }

  /* Imagen y efectos decorativos */
  .hero-image-wrapper {
    position: relative;
    z-index: 2;
  }

  .hero-image-wrapper img {
    width: 100%;
    height: auto;
    max-width: 650px;
    position: relative;
    z-index: 2;
  }



  /* Círculo gris inferior */


  @media (max-width: 991px) {
    .hero-title {
      font-size: 3.5rem;
    }

    .hero-title .creativity {
      font-size: 4rem;
    }

    .hero-title .never-ends {
      font-size: 4.5rem;
    }

    .texture-yellow {
      width: 300px;
      height: 300px;
    }

    .texture-orange {
      width: 250px;
      height: 250px;
    }
  }

  @media (max-width: 767px) {
    .hero-title {
      font-size: 2.5rem;
    }

    .hero-title .creativity {
      font-size: 3rem;
    }

    .hero-title .never-ends {
      font-size: 3.5rem;
    }

    .texture-yellow {
      width: 200px;
      height: 200px;
      opacity: 0.6;
    }

    .texture-orange {
      width: 180px;
      height: 180px;
      opacity: 0.6;
    }
  }
</style>

<section class="hero-section py-5">
  <!-- Texturas decorativas -->
  <div class="texture-yellow"></div>
  <div class="texture-orange"></div>

  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6 text-center text-lg-start mb-5 mb-lg-0">
        <h1 class="hero-title">
          <span class="creativity">Creativity</span>
          <span class="never-ends">never ends</span>
        </h1>
        <p class="hero-subtitle">Come & be creative</p>
        <p class="hero-description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
          ultrices gravida.
        </p>
        <a href="#explorar" class="btn btn-hero">
          Read more
        </a>
      </div>

      <div class="col-lg-6 text-center">
        <div class="hero-image-wrapper">
          <img
            src="./assets/images/Hero.webp"
            class="img-fluid"
            alt="Arte abstracto creativo">
        </div>
      </div>

    </div>
  </div>
</section>