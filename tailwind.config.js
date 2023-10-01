module.exports = {
  mode: 'jit',
  content: ['./src/**/*.{html,js}', './src/components/**/*.{html,js}'],
  theme: {
    extend: {},
    spacing: {
      0: '0',
      1: '4px',
      2: '8px',
      3: '12px',
      4: '16px',
      5: '20px',
      6: '24px',
      7: '28px',
      8: '32px',
      9: '36px',
      10: '40px',
      11: '44px',
      12: '48px',
      13: '52px',
      14: '56px',
      15: '60px',
      16: '64px',
      17: '68px',
      18: '72px',
      20: '80px',
      23: '92px',
      24: '96px',
      25: '100px',
      30: '120px',
      32: '128px',
      37: '148px',
      40: '160px',
      48: '192px',
      50: '200px',
      56: '224px',
      64: '256px'
    },
    fontSize: {
      10: '1rem',
      11: '1.1rem',
      12: '1.2rem',
      13: '1.3rem',
      14: '1.4rem',
      base: '1.5rem'
    },
    screens: {
      sp: { max: '767px' },
      pc: { min: '768px' }
    }
  },
  plugins: []
};
