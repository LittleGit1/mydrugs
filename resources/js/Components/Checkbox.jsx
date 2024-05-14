const Checkbox = ({ name, slug, onCheckStateChange }) => {
    return (
        <div className="flex items-center gap-x-2">
            <label htmlFor={slug}>{name}</label>
            <input type="checkbox" name={slug} id={slug} onChange={(event) => onCheckStateChange(event)} />
        </div>
    );
};

export default Checkbox;
