<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class Form1
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()>
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()>
    Private Sub InitializeComponent()
        Me.lbl_titulo = New System.Windows.Forms.Label()
        Me.lst_valor = New System.Windows.Forms.ListBox()
        Me.btn_for1 = New System.Windows.Forms.Button()
        Me.btn_limpiar = New System.Windows.Forms.Button()
        Me.btn_for2 = New System.Windows.Forms.Button()
        Me.btn_for3 = New System.Windows.Forms.Button()
        Me.btn_while1 = New System.Windows.Forms.Button()
        Me.btn_while2 = New System.Windows.Forms.Button()
        Me.btn_while3 = New System.Windows.Forms.Button()
        Me.btn_loop = New System.Windows.Forms.Button()
        Me.SuspendLayout()
        '
        'lbl_titulo
        '
        Me.lbl_titulo.AutoSize = True
        Me.lbl_titulo.Font = New System.Drawing.Font("Segoe UI", 15.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point)
        Me.lbl_titulo.Location = New System.Drawing.Point(224, 25)
        Me.lbl_titulo.Name = "lbl_titulo"
        Me.lbl_titulo.Size = New System.Drawing.Size(240, 28)
        Me.lbl_titulo.TabIndex = 0
        Me.lbl_titulo.Text = "Estructura de repeticion"
        '
        'lst_valor
        '
        Me.lst_valor.FormattingEnabled = True
        Me.lst_valor.ItemHeight = 15
        Me.lst_valor.Location = New System.Drawing.Point(77, 124)
        Me.lst_valor.Name = "lst_valor"
        Me.lst_valor.Size = New System.Drawing.Size(192, 184)
        Me.lst_valor.TabIndex = 1
        '
        'btn_for1
        '
        Me.btn_for1.Location = New System.Drawing.Point(335, 124)
        Me.btn_for1.Name = "btn_for1"
        Me.btn_for1.Size = New System.Drawing.Size(99, 28)
        Me.btn_for1.TabIndex = 2
        Me.btn_for1.Text = "FOR 1"
        Me.btn_for1.UseVisualStyleBackColor = True
        '
        'btn_limpiar
        '
        Me.btn_limpiar.Location = New System.Drawing.Point(77, 323)
        Me.btn_limpiar.Name = "btn_limpiar"
        Me.btn_limpiar.Size = New System.Drawing.Size(114, 31)
        Me.btn_limpiar.TabIndex = 3
        Me.btn_limpiar.Text = "Limpiar"
        Me.btn_limpiar.UseVisualStyleBackColor = True
        '
        'btn_for2
        '
        Me.btn_for2.Location = New System.Drawing.Point(335, 175)
        Me.btn_for2.Name = "btn_for2"
        Me.btn_for2.Size = New System.Drawing.Size(99, 28)
        Me.btn_for2.TabIndex = 4
        Me.btn_for2.Text = "FOR 2"
        Me.btn_for2.UseVisualStyleBackColor = True
        '
        'btn_for3
        '
        Me.btn_for3.Location = New System.Drawing.Point(335, 226)
        Me.btn_for3.Name = "btn_for3"
        Me.btn_for3.Size = New System.Drawing.Size(99, 25)
        Me.btn_for3.TabIndex = 5
        Me.btn_for3.Text = "FOR 3"
        Me.btn_for3.UseVisualStyleBackColor = True
        '
        'btn_while1
        '
        Me.btn_while1.Location = New System.Drawing.Point(473, 127)
        Me.btn_while1.Name = "btn_while1"
        Me.btn_while1.Size = New System.Drawing.Size(95, 25)
        Me.btn_while1.TabIndex = 6
        Me.btn_while1.Text = "WHILE 1"
        Me.btn_while1.UseVisualStyleBackColor = True
        '
        'btn_while2
        '
        Me.btn_while2.Location = New System.Drawing.Point(471, 178)
        Me.btn_while2.Name = "btn_while2"
        Me.btn_while2.Size = New System.Drawing.Size(98, 26)
        Me.btn_while2.TabIndex = 7
        Me.btn_while2.Text = "While2"
        Me.btn_while2.UseVisualStyleBackColor = True
        '
        'btn_while3
        '
        Me.btn_while3.Location = New System.Drawing.Point(480, 229)
        Me.btn_while3.Name = "btn_while3"
        Me.btn_while3.Size = New System.Drawing.Size(95, 25)
        Me.btn_while3.TabIndex = 8
        Me.btn_while3.Text = "While3"
        Me.btn_while3.UseVisualStyleBackColor = True
        '
        'btn_loop
        '
        Me.btn_loop.Location = New System.Drawing.Point(474, 276)
        Me.btn_loop.Name = "btn_loop"
        Me.btn_loop.Size = New System.Drawing.Size(107, 31)
        Me.btn_loop.TabIndex = 9
        Me.btn_loop.Text = "Loop"
        Me.btn_loop.UseVisualStyleBackColor = True
        '
        'Form1
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(7.0!, 15.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(800, 450)
        Me.Controls.Add(Me.btn_loop)
        Me.Controls.Add(Me.btn_while3)
        Me.Controls.Add(Me.btn_while2)
        Me.Controls.Add(Me.btn_while1)
        Me.Controls.Add(Me.btn_for3)
        Me.Controls.Add(Me.btn_for2)
        Me.Controls.Add(Me.btn_limpiar)
        Me.Controls.Add(Me.btn_for1)
        Me.Controls.Add(Me.lst_valor)
        Me.Controls.Add(Me.lbl_titulo)
        Me.Name = "Form1"
        Me.Text = "Form1"
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents lbl_titulo As Label
    Friend WithEvents lst_valor As ListBox
    Friend WithEvents btn_for1 As Button
    Friend WithEvents btn_limpiar As Button
    Friend WithEvents btn_for2 As Button
    Friend WithEvents btn_for3 As Button
    Friend WithEvents btn_while1 As Button
    Friend WithEvents btn_while2 As Button
    Friend WithEvents btn_while3 As Button
    Friend WithEvents btn_loop As Button
End Class
