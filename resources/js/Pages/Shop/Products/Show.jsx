import BasketForm from "../../../Components/Products/BasketForm";
import NoComments from "../../../Components/Products/NoComments";
import Review from "../../../Components/Products/Review";
import Layout from "../../../Shared/Layout";

const Show = ({ product }) => {

    const updateBasket = (quantity) => {
        console.log(quantity);
    }

    return (
        <main>
            <div className="container mx-auto grid grid-cols-2 bg-gray-100">
                <div>
                    <img src="https://picsum.photos/800/600" alt="" />
                </div>
                <div>
                    <h1 className="text-2xl font-medium">{product.name}</h1>
                    <p>{product.description}</p>
                    <span>
                        $<span>{product.price}</span>
                    </span>
                    <a
                        className="text-xs"
                        href={`/shop/products?category=${product.category.slug}`}
                    >
                        {product.category.name}
                    </a>
                    <BasketForm onBasketSubmit={updateBasket} maxQuantity={product.stock_quantity} />
                </div>
            </div>
            <section class="container mx-auto flex flex-col gap-y-2 mt-4">
                {product.reviews && product.reviews.length > 0 ? (
                    product.reviews.map((review) => <Review review={review}/>)
                ) : (
                    <NoComments />
                )}
            </section>
        </main>
    );
};

Show.layout = (page) => <Layout children={page} />;

export default Show;
