<div class="header">
    <div class="header-title">
        <a href="?page=home"><h1>Onlineshop</h1></a>
    </div>
    <div class="header-content">
        <div class="header-items">
            <ul>
                <li><a href="?page=shop">Shop</a></li>
                <li><a href="?page=search">Search</a></li>
                <li><a href="?page=forum">Forum</a></li>
                <li><a href="?page=balance">€12.13</a></li>
            </ul>
        </div>
        <div class="header-icons">
            <ul>
                <li><a href="?page=cart"><img src="./media/icons/cart.png"/></a></li>
                <li><a href="?page=messages"><img src="./media/icons/mail.png"/></a></li>
                <li><a href="?page=account"><img src="./media/icons/user.png"/></a></a></li>
                <li><a href="?page=settings"><img src="./media/icons/settings.png"/></a></a></li>
            </ul>
        </div>
    </div>
</div>

<style>
.header {
    position: fixed;
    width: 100%;
    background-color: var(--primary);
    height:64px;
}

.header-title {
    padding-top: 13px;
    padding-left: 20px;
    padding-bottom: 17px;
    width: 200px;
    float:left;
}

.header-content {
    min-width: calc(100% - 220px);
    float: right;
}

.header-items {
    min-width: 62%;
    float:left;
}

.header-items ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.header-items li {
    float: left;
}

.header a {
    text-decoration: none;
}

.header-items li a {
    display: block;
    color: var(--font);
    text-align: center;
    padding: 23px 20px;
    font-family: sans-serif;
}

.header-items li a:hover {
    background-color: var(--primary-dark);
}

.header-icons {
    width: 38%;
    float:right;
}

.header-icons ul {
    float: right;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.header-icons li {
    float: left;
}

.header-icons img {
    width: 24px;
}

.header-icons li a {
    display: block;
    color: var(--font);
    text-align: center;
    padding: 18px 20px;
    text-decoration: none;
    font-family: sans-serif;
}

.header-icons li a:hover {
    background-color: var(--primary-dark);
}
</style>
