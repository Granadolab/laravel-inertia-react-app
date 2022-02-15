import { Link } from '@inertiajs/inertia-react';
import React, {Fragment} from 'react';


 const Table = ({info}) => {

    const https= 'https://';

  return (
    <Fragment>



<div className="flex flex-col">
      <div className="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div className="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div className="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table className="min-w-full divide-y divide-gray-200">
              <thead className="bg-blue-300">
                <tr>
                  <th
                    scope="col"
                    className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Name
                  </th>

                  <th
                    scope="col"
                    className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Description
                  </th>
                  <th
                    scope="col"
                    className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Status
                  </th>
                  <th scope="col" className="relative px-6 py-3">
                    <span className="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody className="bg-white divide-y divide-gray-200">
                {info.map((game, key) => (
                  <tr key={key}>
                    <td className="px-6 py-4 whitespace-nowrap">
                      <div className="flex items-center">
                        <div className="flex-shrink-0 h-10 w-10">
                             {game.url_image_game.includes(https) ?
                                  <img className="h-10 w-10 rounded-full" src={game.url_image_game} alt="" />
                             :
                                  <img className="h-10 w-10 rounded-full" src={`/storage/games/${game.url_image_game}`} alt=""/>
                             }

                        </div>
                        <div className="ml-4">
                          <div className="text-sm font-medium text-gray-900">{game.name_game}</div>
                        </div>
                      </div>
                    </td>
                    <td className="px-6 py-4 whitespace-nowrap">
                      <div className="text-sm text-gray-900">
                      <a href={game.url_game} target="_blank" className="text-indigo-600 hover:text-indigo-900">
                        Ir al juego
                      </a>
                      </div>
                      <div className="text-sm text-gray-500">{game.description}</div>
                    </td>
                    <td className="px-6 py-4 whitespace-nowrap">
                      <span className="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                       {game.status}
                      </span>
                    </td>
                    <td className=" py-4 whitespace-nowrap  space-x-4  text-right text-sm font-medium">

                      <div>
                      <Link href={`/games/edit/${game.id}`} method='get' className="text-indigo-600 hover:text-indigo-900">Edit</Link>
                      </div>

                    <div>
                    <Link href={`/games/delete/${game.id}`} method='get' className="text-indigo-600 hover:text-indigo-900">delete</Link>
                    </div>
                    </td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </Fragment>
  )
}

export default Table;
