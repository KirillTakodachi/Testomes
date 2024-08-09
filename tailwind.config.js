/** @type {import('tailwindcss').Config} */
export default {
    content: ['./resources/**/*.blade.php'],
    theme: {
        extend: {
            fontFamily: {
                'mont': "Montserrat",
                'playfair': "Playfair",
            },
            fontSize: {
                '11px': '11px',
                '14px': '14px',
                '16px': '16px',
                '20px': '20px',
                '21px': '21px',
                '22px': '22px',
                '23px': '23px',
                '24px': '24px',
                '32px': '32px',
                '42px': '42px',
                '70px': '70px',
            },
            textColor: {
                'clay': '#A4ABB9',
                'but-clay': '#ACC0D1',
                'footer-text': '#6E88A1',
                'but': '#C58E00',
            },

            backgroundImage: {
                'header-fon': "url('/public/images/imgBackground 1.png')",
                'iceland-fon': "url('/public/images/imgIsland 1.png')",
                'dolomit-fon': "url('/public/images/imgIsland 1 (1).png')",
                'norfland-fon': "url('/public/images/imgIsland 1 (2).png')",
                'hawai-fon': "url('/public/images/imgHawaii 1.png')",
                'form-fon': "url('/public/images/imgForm 1.png')",
                'form-fon2': "url('/public/images/imgHawaii 1 (1).png')",
            },
            backgroundColor: {
                'clay': '#E0E4E9',
                'blue-clay': '#ACC0D1',
                'button': '#C58E00',
                'gold': '#FFB800',
            },
            borderColor: {
                'but-color': '#C58E00',
                'but-blue-clay': '#ACC0D1',
            },
            width: {
                'bloc-w': '285px',
            },
            height: {
                '100px': '100px',
                'bloc-h': '200px',
            },
            margin: {
                'block-mt': '70px',
                'bloc-ml': '105px',
                'bloc-big-ml': '420px',
                'block-big-mt': '250px',
            },
            padding: {
                'block-num-pt': '31px',
            },
        },
    },
    plugins: [],
}

