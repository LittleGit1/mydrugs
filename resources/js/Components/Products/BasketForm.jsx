import { useState } from "react";

const BasketForm = ({onBasketSubmit, maxQuantity = 10}) => {

    const [quantity, setQuantity] = useState(1);

    const onChangeQuantity = (event) => {
        if(quantity + 1 > maxQuantity) return;
        setQuantity(event.target.valueAsNumber)
    }

    return (
        <div>
            <div>
                <label htmlFor="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" value={quantity} onChange={onChangeQuantity} />
            </div>
            <button
                className="block bg-pink-500 text-white text-md font-medium px-4 py-2 rounded-xl"
                onClick={() => onBasketSubmit()}
            >
                Add to cart
            </button>
        </div>
    );
};

export default BasketForm;
