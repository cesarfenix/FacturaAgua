# FacturaAgua
factura de agua simple
La clase FacturaAgua tiene como atributos los datos del cliente y la cantidad de metros cúbicos consumidos por acueducto y la cantidad de metros cúbicos consumidos por alcantarillado.
La tarifa de estos servicios se cobrara de la siguiente manera.
Si la cantidad de metros cúbicos de acueducto están entre 0 y 20, se le cobrara al suscriptor a $ 1450 cada metro. Si se superan los 20 metros, se le cobrara al suscriptor los primeros 20 metros a $ 1450 y el resto de metros al 150% de ese valor.
Si la cantidad de metros cúbicos de alcantarillado están entre 0 y 20, se le cobrara al suscriptor a $ 1100 cada metro. Si se superan los 20 metros, se le cobrara al suscriptor los primeros 20 metros a $ 1100 y el resto de metros al 150% de ese valor.
Adicional a esto, de acuerdo al estrato se obtendrá un descuento sobre el valor de la factura.
Estrato 1. 20%
Estrato 2. 10%
Estrato 3. 5%
El resto de estratos no posee descuento.
