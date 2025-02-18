// password_check.c
#include <stdbool.h>
#include <string.h>

#ifdef __cplusplus
extern "C" {
#endif

bool is_password_valid(const char *password) {
    // Verifica se a senha tem 5 ou mais caracteres
    return strlen(password) >= 8;
}

#ifdef __cplusplus
}
#endif
