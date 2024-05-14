import { useState } from "react";
import Checkbox from "./Checkbox";

const Collapsible = ({ name, data, initiallyHidden, onChangeValue }) => {
    const [collapsed, setCollapsed] = useState(initiallyHidden);

    const onChangeCollapsed = () => {
        setCollapsed(!collapsed);
    };

    return (
        <div className="mb-0.5">
            <div
                className="pl-4 py-4 bg-pink-500"
                onClick={() => onChangeCollapsed()}
            >
                <span className="text-white font-bold">{name}</span>
            </div>
            <div
                className={`${
                    collapsed ? "hidden" : "block"
                } flex flex-col gap-2 py-3 px-3`}
            >
                {data &&
                    data.map((item) => (
                        <Checkbox
                            name={item.name}
                            slug={item.slug}
                            onCheckStateChange={(event) => onChangeValue(event)}
                        />
                    ))}
            </div>
        </div>
    );
};

export default Collapsible;
