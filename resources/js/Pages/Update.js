import React, {useState, useEffect} from 'react'
import Input from '../Components/Input';
import { Layout } from '../Components/Layout';
import { Inertia } from '@inertiajs/inertia';
import { Link } from '@inertiajs/inertia-react';
import { usePage } from '@inertiajs/inertia-react';


 const Update = () => {

     const { errors, data } = usePage().props;

    const https= 'https://';
    const file = new  File([new Uint8Array(3000)],  `${data.url_image_game}`,{type:'file'});



    const [values, setValues] = useState({
        id:"",
        name_game: "",
        url_game: "",
        description: "",

    });


    useEffect(() => {
        setValues({
            id:data.id,
            name_game: data.name_game,
            url_game: data.url_game,
            img_game: file,
            description: data.description,
        });
    }, [data]);


    const  handleChange = (evt) => {
        const { target } = evt;
        const { name, value, files } = target;


        if (name == 'img_game') {
            const newValues = {
                ...values,
                [name]: files[0],
              };
              setValues(newValues);
        }else{
            const newValues = {
                ...values,

                [name]: value,
              };
              setValues(newValues);
        }

    }

    const handleSubmit = (e)=> {
        e.preventDefault();

        console.log(values);
         Inertia.post(`/games`, values,{forceFormData: true});
    }


  return (
    <Layout>
    <div className='flex flex-row text-center pb-8'>
        <h4 className='text-gray-600'>Actualizar {data.name_game}</h4>
    </div>
    <div className='flex flex-row'>
    <form onSubmit={handleSubmit}>
    <div className='flex flex-col p-3'>
        <Input
        id='name_game'
        name='name_game'
        onChange={handleChange}
        value={values.name_game}
        placeholder = 'Ingrese un nombre del juego'
        label = 'Nombre del Juego '
        type = 'text'
        error = {errors.name_game}
        />
    </div>
    <div className='flex flex-col p-3'>

        <div className="shrink h-10 w-10">
                {data.url_image_game.includes(https) ?
                    <img className="h-10 w-10 rounded-full" src={data.url_image_game} alt="" />
                :
                    <img className="h-10 w-10 rounded-full" src={`/storage/games/${data.url_image_game}`} alt=""/>
                }
        </div>
        <input
        id='img_game'
        name='img_game'
        onChange={handleChange}
        value={values.value}
        placeholder = 'Cargue una imagen del juego'
        label = 'Imagen del Juego '
        type = 'file'
        error = {errors.img_game}

        />
    </div>
      <div className='flex flex-col p-3'>
      <Input
       id='url_game'
       name='url_game'
       onChange={handleChange}
       value={values.url_game}
       placeholder = 'Ingrese una URL valida del juego'
       label = 'URL del juego '
       type = 'url'
       error = {errors.url_game}

      />
      </div>

      <div className='flex flex-col p-4'>
      <Input
       id='description'
       name='description'
       onChange={handleChange}
       value={values.description}
       placeholder = 'Ingrese una descripción del juego'
       label = 'Descripcion del juego '
       type = 'text'
       error = {errors.description}

      />
      </div>

      <button type='submit' className="bg-transparent btn block hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent">
            Update
        </button>

     </form>
    </div>
</Layout>
  )
}

export default Update;
