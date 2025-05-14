# Proyecto Web de Cosméticos - Belleza Vogue

Estructura MVC en PHP con:
- Mega-menu y Hero Banner interactivo.
- Slider de productos destacados.
- Grid de productos.
- Tipografías elegantes y estilos modernos.

```sql
CREATE TABLE productos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  descripcion TEXT,
  precio DECIMAL(10,2),
  imagen VARCHAR(255),
  destacado TINYINT DEFAULT 0
);
```

