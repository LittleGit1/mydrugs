const Product = ({ product }) => {
    return (
        <li className="rounded-xl overflow-hidden">
            <a href={`shop/products/${product.id}`} className="relative block">
                <img src="https://picsum.photos/400/300" alt="" />
                <div className="bg-white absolute flex justify-between bottom-0 left-0 w-full px-4 py-3">
                    <div>
                        <span className="block text-md">
                            {product.attributes.name}
                        </span>
                        <span className="block text-xs">
                            {product.attributes.parent_category}
                        </span>
                    </div>
                    <div className="self-center">
                        <span>
                            ${product.attributes.price}
                        </span>
                    </div>
                </div>
            </a>
        </li>
    );
};

export default Product;
