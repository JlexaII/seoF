import './bootstrap';

if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
    '(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark')
}

import tinymce from 'tinymce/tinymce';

// ??????????? ?????? ? ??? ?????????? ??? TinyMCE
import 'tinymce/themes/silver';

// ??????????? ???????? ??? TinyMCE
import 'tinymce/plugins/link';
import 'tinymce/plugins/image';
import 'tinymce/plugins/lists';
import 'tinymce/plugins/code';

// ????????????? TinyMCE
tinymce.init({
  selector: 'textarea#texted',
  height: 500,
  branding: false,
  plugins: 'link image lists code',
  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image | code',
});
