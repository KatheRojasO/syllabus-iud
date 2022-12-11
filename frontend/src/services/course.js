import { API_URL } from '../helpers/const';

const getCourses = () => {

    const url = `${API_URL}course`;

    return fetch(url, {
        method: 'GET',
        headers: {
            'Content-type': 'application/json'
        },
    });

}

export {
    getCourses,
}