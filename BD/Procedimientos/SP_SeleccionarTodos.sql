DROP PROCEDURE IF EXISTS SP_SeleccionarTodos;

DELIMITER $$

CREATE PROCEDURE SP_SeleccionarTodos(
  IN pcTabla            VARCHAR(45),
)

SP:BEGIN

SELECT * FROM pcTabla;

END $$
