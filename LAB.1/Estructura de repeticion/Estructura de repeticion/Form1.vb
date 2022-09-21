Public Class Form1
    Private Sub lst_valor_SelectedIndexChanged(sender As Object, e As EventArgs) Handles lst_valor.SelectedIndexChanged
        Dim i As Integer
        For i = 1 To 10
            lst_valor.Items.Add(i)
        Next
        ' for(i=1<=10,i++)
    End Sub

    Private Sub btn_limpiar_Click(sender As Object, e As EventArgs) Handles btn_limpiar.Click
        lst_valor.Items.Clear()
    End Sub

    Private Sub btn_for1_Click(sender As Object, e As EventArgs) Handles btn_for1.Click
        Dim i As Integer
        For i = 1 To 10
            lst_valor.Items.Add(i)
        Next

    End Sub

    Private Sub btn_for2_Click(sender As Object, e As EventArgs) Handles btn_for2.Click
        Dim i As Integer
        For i = 1 To 10 Step 2
            lst_valor.Items.Add(i)
        Next
    End Sub

    Private Sub btn_for3_Click(sender As Object, e As EventArgs) Handles btn_for3.Click
        Dim i As Integer
        For i = 1 To 10 Step -1
            lst_valor.Items.Add(i)
        Next
    End Sub

    Private Sub btn_while1_Click(sender As Object, e As EventArgs) Handles btn_while1.Click
        Dim i As Integer
        i = 1
        While i <= 10
            lst_valor.Items.Add(i)
            'i = i + 1
1+=1
        End While
    End Sub

    Private Sub btn_while2_Click(sender As Object, e As EventArgs) Handles btn_while2.Click
        Dim i As Integer
        i = 0
        While i <= 10
            lst_valor.Items.Add(i)
            i += 2
            Next

    End Sub

    Private Sub btn_while3_Click(sender As Object, e As EventArgs) Handles btn_while3.Click
        Dim i As Integer
        i = 10
        While i >= 1
            lst_valor.Items.Add(i)
            i -= 1
            Next
    End Sub

    Private Sub btn_loop_Click(sender As Object, e As EventArgs) Handles btn_loop.Click
        Dim i As Integer
        i = 1
        Do
            lst_valor.Items.Add(i)
            i += 1
        Loop Until i > 10

    End Sub
End Class
