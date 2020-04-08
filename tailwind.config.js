module.exports = {
    theme: {
        letterSpacing: {
            tighter: '-.05em',
            tight: '-.025em',
            normal: '0',
            wide: '.025em',
            wider: '.05em',
            widest: '.1em',
            logo: '6.5px',
        },
        textColor: theme => ({
            ...theme('colors'),
            'pink-shrtn': '#F4005B',
        }),
        backgroundColor: theme => ({
            ...theme('background-color'),
            'shrtn': "#F4005B",
        })
    },

}
