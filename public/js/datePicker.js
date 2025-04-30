import AirDatepicker from '../node_modules/air-datepicker/index.es';

// new AirDatepicker('#datePicker', {
//     isMobile: true,
//     autoClose: true,
//   });

document.addEventListener("DOMContentLoaded", () => {
    new AirDatepicker('#datepicker', {
      autoClose: true,
      dateFormat: 'dd/MM/yyyy',
    });
  });