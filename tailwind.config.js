module.exports = {

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        colors: {
            primary : '#7367F0',
            'primary-disabled' : 'rgba(115,103,240,0.47)',
            'primary-transparent' : 'rgba(115, 103, 240, 0.12)',
            'primary-active' : 'rgba(94, 80, 238, 1)',
            secondary : '#82868B',
            'secondary-disabled' : 'rgba(130,134,139,0.52)',
            'secondary-transparent' : 'rgba(108, 117, 125, 0.12)',
            'secondary-active' : 'rgba(117, 121, 126, 1)',
            success : '#28C76F',
            'success-disabled' : 'rgba(40,199,111,0.44)',
            'success-transparent' : 'rgba(40, 199, 111, 0.12)',
            'success-active' : 'rgba(36, 178, 99, 1)',
            danger : '#EA5455',
            'danger-disabled' : 'rgba(234,84,85,0.48)',
            'danger-transparent' : 'rgba(234, 84, 85, 0.12)',
            'danger-active' : 'rgba(231, 61, 62, 1)',
            warning : '#FF9F43',
            'warning-disabled' : 'rgba(255,159,67,0.51)',
            'warning-transparent' : 'rgba(255, 159, 67, 0.12)',
            'warning-active' : 'rgba(255, 146, 42, 1)',
            info : '#00CFE8',
            'info-disabled' : 'rgba(0,207,232,0.52)',
            'info-transparent' : 'rgba(0, 207, 232, 0.12)',
            'info-active' : 'rgba(0, 184, 207, 1)',
            dark : '#4B4B4B',
            'dark-disabled' : 'rgba(75,75,75,0.49)',
            'dark-transparent' : 'rgba(30, 30, 30, 0.12)',
            'dark-active' : 'rgba(52, 52, 52, 1)',
            light : '#BABFC7',
            'light-disabled' : 'rgba(186,191,199,0.53)',
            'light-transparent' : 'rgba(186, 191, 199, 0.12)',
          },
          fontFamily: {
            montserrat: ['Montserrat', 'sans-serif'],
          }
    },
  },
  plugins: [],
}
