import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/* @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/protonemedia/laravel-splade/lib/**/*.vue",
        // "./vendor/protonemedia/laravel-splade/resources/views/**/**/*.blade.php",
        "./vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php",
        // "./vendor/protonemedia/laravel-splade/resources/views/dashboard/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
        // "./app/Forms/*.php",
        // "./app/Tables/*.php",
    ],

    theme: {
      fontFamily: {
        sans: ['Roboto', 'sans-serif'],
      },
        container:{
            center: true,
            padding: {
              DEFAULT: '20px',
              md: "55px"
            }
          },
        extend: {
          keyframes: {
            updown: {
              '0%, 100%' : { 
                transform: 'translateY(-10%)' 
              },
              '50%': { 
                transform: 'translateY(10%)' 
              },
            }
          },
          animation: {
            updown: 'updown 7s ease-in-out infinite',
          },
            colors: {
                "color-primary": "#222831",
                "color-primary-light": "#020726",
                "color-primary-dark": "#010417",
                "color-secondary": "#2dd4bf",
                "color-gray": "#333",
                "color-white": "#fff",
                "color-blob": "#A427DF",
                'primary': {
                  100: '#cffafe',
                  200: '#a5f3fc',
                  300: '#67e8f9',
                  400: '#22d3ee',
                  500: '#06b6d4',
                  600: '#0891b2',
                  700: '#0e7490',
                  800: '#155e75',
                  900: '#164e63',
                },
              },
        },
    },

    plugins: [forms, typography],
};
