import AirDatepicker from 'air-datepicker';
import localeEs from 'air-datepicker/locale/es';
import 'air-datepicker/air-datepicker.css';

new AirDatepicker('#fecha_nacimiento', {
    locale: localeEs,
    view: 'years',
    minView: 'days',
    buttons: ['today', 'clear'],
    dateFormat: "yyyy/MM/dd",
})
