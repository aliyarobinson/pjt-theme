"use strict";

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  var prodID = document.querySelectorAll('[data-shopify-product]')[0].getAttribute('data-shopify-product');
  console.log('prodID: ', prodID);

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
     	ui.createComponent('product', {
        id: [prodID],
        node: document.querySelectorAll('[data-shopify-product]')[0],
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
		  "product": {
		    "layout": "horizontal",
		    "variantId": "all",
		    "width": "100%",
		    "contents": {
		      "img": false,
		      "imgWithCarousel": true,
		      "variantTitle": false,
		      "description": true,
		      "buttonWithQuantity": true,
		      "button": false,
		      "quantity": false
		    },
		    "styles": {
		      "product": {
		        "text-align": "left",
		        "@media (min-width: 601px)": {
		          "max-width": "100%",
		          "margin-left": "0"
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
		      },
		      "title": {
		        "font-size": "26px"
		      },
		      "price": {
		        "font-size": "18px"
		      },
		      "compareAt": {
		        "font-size": "15px"
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
		          "background-color": "#e6c815"
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
		    	"button": {
		    		"margin-bottom" : "30px"
		    	},
		      "products": {
		        "@media (min-width: 601px)": {
		          "margin-left": "-20px"
		        }
		      }
		    }
		  }
		}
      });
    });
  }
})();


// })();