"use strict";

// Change label text for single product page file upload component
{
  const label = document.querySelector('.wau_wrapper_div label');
  if (label) {
    label.textContent = "Сюда можно загрузить фотографию с примером оформления";
  }
}

// {
//   const observer = new MutationObserver(callback);
//   const target = document.querySelector('.bonbonsshop');
//   const params = {
//     childList: true,
//     subtree: true
//   };

//   observer.observe(target, params);

//   function callback(records) {

//     for (const record of records) {

//       if (record.type !== 'childList') {

//         continue;
//       }

//       for (const node of record.addedNodes) {

//         if (node.nodeType !== Node.ELEMENT_NODE || node.nodeName === 'SCRIPT') {

//           continue;
//         }

//         const targetElList = node.querySelectorAll('.wc-block-components-product-details__name');
//         for (const el of targetElList) {

//           if (el.innerText === 'Файл загружен:') {

//             el.innerText = 'Fuck you all!';
//           }
//         }
//       }


//     }
//   }
// }
