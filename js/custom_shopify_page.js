
(function ($) {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'pjt-store.myshopify.com',
      apiKey: 'f7793970e37b7ad9727ea414edf0347e',
      // domain: 'non-profit-mini-store.myshopify.com',
      // apiKey: '0b15c9256855283110bc31cd86e947f4',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      $('.uil-facebook-css').addClass('collapsed');
      ui.createComponent('collection', {
        id: 425580368,
        // id: 419683022,
        node: document.getElementById('collection-component-a70c846db3b'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "buttonDestination": "modal",
    "variantId": "all",
    "contents": {
      "imgWithCarousel": false,
      "variantTitle": false,
      "options": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "text": {
      "button": "VIEW PRODUCT"
    },
    "styles": {
      "product": {
        "margin-bottom": "50px",
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px"
        }
      },
      "button": {
        "background-color": "#ffde17",
        "color": "#414042",
        ":hover": {
          "background-color": "#e6c815",
          "color": "#414042"
        },
        ":focus": {
          "background-color": "#e6c815"
        }
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "styles": {
      "button": {
        "background-color": "#ffde17",
        "color": "#414042",
        ":hover": {
          "background-color": "#e6c815",
          "color": "#414042"
        },
        ":focus": {
          "background-color": "#ffde17"
        }
      },
      "footer": {
        "background-color": "#ffffff"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#ffde17",
        "margin-bottom" : "30px",
        "color": "#414042",
        ":hover": {
          "background-color": "#e6c815",
          "color": "#414042"
        },
        ":focus": {
          "background-color": "#e6c815"
        }
      }
    }
  },
  "modal": {
    "styles": {
      "close": {
        "background-color": "#ffde17",
        "color": "#414042",
        "right": "initial",
        "left": "50%",
        "transition": "300ms",
        "transform": "translateX(-50%)",
        ":hover": {
          "color": "#414042",
          "transform": "translateX(-50%)",
          "font-size": "60px"
        }
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#ffde17",
        ":hover": {
          "background-color": "#e6c815"
        },
        ":focus": {
          "background-color": "#e6c815"
        }
      },
      "count": {
        "color": "#414042",
        ":hover": {
          "color": "#414042"
        }
      },
      "iconPath": {
        "fill": "#414042"
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        },
        "@media (max-width: 600px)": {
          "margin-bottom": "30px"
        }
      }
    }
  }
}
      });
    });
  }
})(jQuery);