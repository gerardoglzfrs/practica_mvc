<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <body>
                <h1>Usuarios</h1>
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Apellido materno</th>
                        <th>Apellido paterno</th>
                    </tr>
                    <xsl:for-each select="usuarios/usuario">
                    <tr>
                        <td><xsl:value-of select="username" /></td>
                        <td><xsl:value-of select="nombre" /></td>
                        <td><xsl:value-of select="apellidom" /></td>
                        <td><xsl:value-of select="apellidop" /></td>
                    </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
