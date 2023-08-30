

const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
        <div class="nav">
           <a href="index.html"><img src="" class="brand-logo" alt="" style="width: 200px"></a>
           
           
            <div class="nav-items">
                <a href="Formulier.html"><img src="img/user.png" alt=""></a>  
            </div>
        </div>
        <ul class="links-container">
            <li class="link-item"><a href="index.html" class="link" style="text-decoration: underline; text-decoration-color: #2AA2D6; text-decoration-thickness: 6px">Home</a></li>
            <li class="link-item"><a href="Projects.html" class="link">Projects</a></li>
            <li class="link-item"><a href="contact.html" class="link">Contact</a></li>
            <li class="link-item"><a href="ThomasInfo.html" class="link">Contact</a></li>
        </ul>
    `;
}
createNav();

let config = "menu";

document.getElementById("menu").addEventListener("mouseover", change1);
document.getElementById("Projects").addEventListener("mouseover", change2);

function change1(){
    config = "menu";
}
function change2(){
    config = "Projects";
}
function mouseOver() {
    let section = document.querySelector('.hero');

    if (config === "menu") {
        section.innerHTML = `
       
                    <div class="hero__overlay"></div>
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" loading="lazy" class="hero__video">
                        <source src="img/typetypetype.mp4" type="video/mp4">
                    </video>

                    <div class="hero__content h-100 container-custom position-relative">
                        <div class="d-flex h-100 align-items-center hero__content-width">
                            <div class="text-white">
                                <h1 class="hero__heading fw-bold mb-4">menu</h1>
                                <p class="lead mb-4">Ik ben Thomas Seisveld 17 Jaar, en heb deze pagina voor mijzelf gemaakt!</p>
                                <a href="ThomasInfo.html" class="mt-2 btn btn-lg btn-outline-light" role="button">Reed More</a>
                            </div>
                        </div>
                    </div>

                    <a href="#scroll-down" class="hero__scroll-btn">
                        Explore <i class="bi bi-arrow-down-short"></i>
                    </a>
              
    `;
    }
    if (document === "Projects") {
        section.innerHTML = `
       
                    <div class="hero__overlay"></div>
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" loading="lazy" class="hero__video">
                        <source src="img/typetypetype.mp4" type="video/mp4">
                    </video>

                    <div class="hero__content h-100 container-custom position-relative">
                        <div class="d-flex h-100 align-items-center hero__content-width">
                            <div class="text-white">
                                <h1 class="hero__heading fw-bold mb-4">Projects van Thomas</h1>
                                <p class="lead mb-4">Ik ben Thomas Seisveld 17 Jaar, en heb deze pagina voor mijzelf gemaakt!</p>
                                <a href="ThomasInfo.html" class="mt-2 btn btn-lg btn-outline-light" role="button">Reed More</a>
                            </div>
                        </div>
                    </div>

                    <a href="#scroll-down" class="hero__scroll-btn">
                        Explore <i class="bi bi-arrow-down-short"></i>
                    </a>
              
    `;
    }
}
console.log(config)
const createsign = () => {
    let container = document.querySelector('.container');

    container.innerHTML = `
         <div class="row col-md-6 col-md-offset-3">
    <div class="panel panel-primary">
      <div class="panel-heading text-center">
        <h1>Registration Form</h1>
      </div>
      <div class="panel-body">
        <form action="PHP/connect.php" method="post">
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    name="firstName"
            />
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input
                    type="text"
                    class="form-control"
                    id="lastName"
                    name="lastName"
            />
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <div>
              <label for="male" class="radio-inline"
              ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
              />Male</label
              >
              <label for="female" class="radio-inline"
              ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
              />Female</label
              >
              <label for="others" class="radio-inline"
              ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
              />Others</label
              >
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
            />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
            />
          </div>
          <div class="form-group">
            <label for="number">Phone Number</label>
            <input
                    type="number"
                    class="form-control"
                    id="number"
                    name="number"
            />
          </div>
          <input type="submit" class="btn btn-primary" name="submit" />
        </form>
      </div>
      <div class="panel-footer text-right">
        <small>&copy;Thomas Seisveld</small>
      </div>
    </div>
  </div>
    `;
}
const createlog = () => {
    let container = document.querySelector('.container');

    container.innerHTML = `
         <div class="row col-md-6 col-md-offset-3">
    <div class="panel panel-primary">
      <div class="panel-heading text-center">
        <h1>Registration Form</h1>
      </div>
      <div class="panel-body">
        <form action="PHP/connect.php" method="post">
          
          <div class="form-group">
            <label for="email">Email</label>
            <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
            />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
            />
          </div>
          <input type="submit" class="btn btn-primary" name="submit" />
        </form>
      </div>
      <div class="panel-footer text-right">
        <small>&copy;Thomas Sesiveld</small>
      </div>
    </div>
  </div>
    `;
}



const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimenstions = item.getBoundingClientRect();
    let containerWidth = containerDimenstions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})


const createBack = () => {
    let container = document.querySelector('.container');

    container.innerHTML = `
       <div class="flexbox">
             <div1 id="product" onclick="createHouse()">
                <a><img src="img/huis1.jpeg" alt="huis" class="huis-img"></a>
                <h4 class="huis" style="color: #2AA2D6;">Zijdeweg 26</h4>
                <p class="huis">2244 BG Wassenaar</p>
                <p class="huis"><b>€ 1.365.000</b></p>
            </div1>
            <div1>
               <a><img src="img/huis2.jpeg" alt="huis" class="huis-img"></a>
                <h4 class="huis" style="color: #2AA2D6;">Botersloot 545</h4>
                <p class="huis">3011 HE Rotterdam</p>
                <p class="huis"><b>€ € 1.570.000</b></p>
            </div1>
            <div1>
                <a><img src="img/huis3.jpeg" alt="huis" class="huis-img"></a>
                <h4 class="huis" style="color: #2AA2D6;">Botersloot 547</h4>
                <p class="huis">3011 HE Rotterdam</p>
                <p class="huis"><b>€ € 1.975.000</b></p>
            </div1>
            <div1>
                <a><img src="img/huis2.jpeg" alt="huis" class="huis-img"></a>
                <h4 class="huis" style="color: #2AA2D6;">Wijnhaven 73 X</h4>
                <p class="huis">2244 WK Rotterdam</p>
                <p class="huis"><b>€ € 1.850.000 </b></p>
            </div1>
        </div>
      `;
}
const createHouse = () => {
    let container = document.querySelector('.container');

    container.innerHTML = `
        <div class="flexbox">
             <div class="Info" id="product" onclick="createBack()">
                <a><img src="img/huis1.jpeg" alt="huis" class="huis-img"></a>
                <h4 class="huis" style="color: #2AA2D6;">Zijdeweg 26</h4>
                <p>Plaats: 2244 BG Wassenaar</p>
                <p>Prijs: <b>€ 1.365.000</b></p>
            </div>
            
        </div>
      `;
}