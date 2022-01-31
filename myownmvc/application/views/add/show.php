<div class="form-block">
    <form action="/save" method="post" id="product_form">
        <p>
            <span>SKU</span>
            <input id="sku" type="text" name="sku">
        </p>
        <p>
            <span>Name</span>
            <input id="name" type="text" name="name">
        </p>
        <p>
            <span>Price($)</span>
            <input id="price" type="text" name="price">
        </p>
        <p class="type-switcher">
            <span>Type Switcher</span>
            <form action="/addproduct" method="post" id="productTypeForm">
                <select id="productType" name="type">
                    <option value="disc" id="DVD">DVD</option>
                    <option value="furniture" id="Furniture">Furniture</option>
                    <option value="book" id="Book">Book</option>
                </select>
            </form>
        </p>
        <!-- <div class="type-block">
            <div class="type-block-dvd hide">
                <p>
                    <span>Size(MB)</span>
                    <input type="text" name="size">
                </p>
                <p class="type-block-text">'Please provide size in megabytes'</p>
            </div>
            <div class="type-block-furniture hide">
                <p>
                    <span>Height(CM)</span>
                    <input type="text" name="height">
                </p>
                <p>
                    <span>Width(CM)</span>
                    <input type="text" name="width">
                </p>
                <p>
                    <span>Length(CM)</span>
                    <input type="text" name="length">
                </p>
                <p class="type-block-text">'Please provide dimensions in HxWxL format'</p>
            </div>
            <div class="type-block-book hide">
                <p>
                    <span>Weight(kg)</span>
                    <input type="text" name="weight">
                </p>
                <p class="type-block-text">'Please provide weight in kilograms'</p> -->
            </div>
        </div>
    </form>
</div>