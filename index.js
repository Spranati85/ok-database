function addToCart(product) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/api/shopping');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Insertion was successful
      } else {
        // Error occurred
      }
    };
    xhr.send(product.json);
  }
  