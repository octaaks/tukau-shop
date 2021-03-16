<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive navbar</title>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        nav {
            width: 100%;
            height: 100px;
            display: flex;
            justify-content: left;
            font-size: 20px;
            border-bottom: 1px solid #e5e5e5;
        }

        nav button {
            display: none;
        }

        nav .logo {
            width: 30%;
            text-align: center;
            margin-top: 20px;

        }

        nav .logo h1 {
            color: purple;
        }

        nav .logo h1 span {
            color: red;
        }

        nav .menu {
            width: 60%;
            text-align: center;
            margin-top: 20px;
        }

        nav .menu ul li {
            list-style: none;
            float: left;
            padding: 10px;
            margin: 0 20px;
        }

        nav .menu ul:nth-child(2) li {
            position: relative;
            top: -8px;
            left: 140px;
            color: #757575;
        }

        nav .menu ul li a {
            text-decoration: none;
            color: #747575;
        }

        nav .menu ul li a:hover {
            color: #00ffff;
        }

        nav form {
            position: absolute;
            width: 60%;
            left: 25%;
            top: 65px;
        }

        nav form input {
            width: 90%;
            position: relative;
            top: -45px;
            padding: 10px 0px;
            border: none;
            outline: none;
            transform: scaleX(0);
            transform-origin: right;
            transition: .5s;
            border-bottom: 1px solid #e5e5e5;

        }

        nav form input::placeholder {
            font-size: 20px;

        }

        /*js-css*/
        nav form input.expand {
            transform: scaleX(1);
            padding: 10px;
        }

        nav form input.expand~.fa-search {
            visibility: hidden;
        }

        nav form input.expand~.fa-times {
            display: block;
        }

        nav form .fa {
            position: absolute;
            top: -40px;
            right: 40px;
            cursor: pointer;
            color: #757575;
        }

        .fa-times {
            display: none;
        }

        section {
            width: 100%;
            height: 700px;
            background: #d5d3c4;
            display: flex;
            justify-content: space-around;
        }

        .details,
        .image {
            width: 50%;
            padding: 50px;
            font-size: 20px;
            color: #5f5a5a;
        }

        h4,
        p {
            padding: 20px;
            margin: 20px;
        }

        img {
            width: 100%;
        }

        @media(max-width: 768px) {
            nav button {
                display: block;
                width: 30px;
                height: 25px;
                position: absolute;
                top: 20px;
                right: 20px;
                cursor: pointer;
                border: none;
                outline: none;
                background: #757575;
            }

            nav button:before,
            nav button:after {
                position: absolute;
                content: '';
                background: white;
                width: 30px;
                height: 5px;
                top: 5px;
                left: 0;
                transition: 0.5s;
            }

            nav button:after {
                top: 15px;
            }

            nav button.expand-icon {
                background: transparent;
            }

            nav button.expand-icon:before,
            nav button.expand-icon:after {
                transform: rotate(45deg);
                background: #757575;
                top: 10px;
            }

            nav button.expand-icon:after {
                transform: rotate(-45deg);
            }

            nav .logo {
                font-size: 17px;
                left: 22%;
            }

            nav .menu {
                position: absolute;
                width: 100%;
                height: 0;
                background: white;
                top: 80px;
                transition: 0.5s;
                overflow: hidden;
            }

            nav .menu.expand-mobile {
                height: 700px;
            }

            nav .menu ul li {
                float: right;
                width: 90%;
                text-align: left;
            }

            nav form {
                left: 30%;
                width: 65%;
            }

            nav .menu ul:nth-child(2) li {
                top: 0;
                left: 0;
            }

            h4,
            p {
                padding: 0;
                margin: 0;
                font-size: initial;
            }

        }

    </style>
</head>

<body>
    <nav>
        <button></button>
        <div class="logo">
            <h1>Brand-<span>Company</span></h1>
        </div>
        <form action="">
            <input type="text" id="search" placeholder="Search here...">
            <i class="fa fa-search"></i>
            <i class="fa fa-times"></i>
        </form>
        <div class="menu">
            <ul>
                <li><a href="#">Home</a></li>
            </ul>
            <ul>
                <li><i class="fa fa-user"></i></li>
                <li><i class="fa fa-shopping-cart"></i></li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="details">
            <h4>Goods-names</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ad nam dolores, atque accusantium odio
                asperiores modi sit debitis, autem qui maiores exercitationem, facere ratione illum libero nulla optio
                mollitia!
            </p>
        </div>
        <div class="image">
            <img src="image.jpg" alt="image not found">
        </div>
    </section>
</body>

</html>

<script type="text/javascript">
    var searchIcon = document.querySelector('.fa-search');
    var closeIcon = document.querySelector('.fa-times');
    var search = document.getElementById('search');

    searchIcon.onclick = () => {
        search.classList.add('expand');
    }
    closeIcon.onclick = () => {
        search.classList.remove('expand');
    }

    var button = document.querySelector('button');
    var menu = document.querySelector('.menu');
    button.onclick = () => {
        menu.classList.toggle('expand-mobile');
        button.classList.toggle('expand-icon');

    }
</script>
