import React from 'react';


const Input = (props) => {
    const {
        id,
        wrapperClassName = 'mb-6',
        placeholder = '',
        label = '',
        type = 'text',
        error = '',
        required = false,
        ...rest
    } = props;

    return (

        <div className={wrapperClassName}>

            <div className='w-full'>
                <label
                    htmlFor={id}
                    className='block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300'
                >
                    {label} {required && <span className='text-red'>*</span>}
                </label>
                <input
                    type={type}
                    className='block p-4 w-full text-gray-700'
                    id={id}
                    placeholder={placeholder}
                    {...rest}
                />
            </div>
            {error && <p className='text-xs pl-2 text-red-600 mb-4'>{error}</p>}
        </div>
    );
};


export default Input;
